require=(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({3:[function(require,module,exports){
(function (global){

var Collapsable = require( './collapsable' );
var globalExport = require( './globalExport' );

var data = {
	collapsables: []
};

Array.prototype.forEach.call(
	document.getElementsByClassName( 'js-collapsable' ),
	initCollapsable
);

function initCollapsable( el ) {
	data.collapsables.push( new Collapsable( el ) );
}

document.addEventListener('DOMContentLoaded', function(){
	if ( global.Prism ) {
		Prism.hooks.add( 'after-highlight', function( env ) {
			var el = env.element.parentNode.parentNode;
			if ( el.collapsable ) {
				el.collapsable.remeasureHeight();
			}
		});
	}
});

globalExport( 'wpdHighlighter', data );

}).call(this,typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {})
},{"./collapsable":1,"./globalExport":2}],2:[function(require,module,exports){
(function (global){
module.exports = function( name, data ) {
	global[ name ] = data;
};

}).call(this,typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {})
},{}],1:[function(require,module,exports){
var labels = require( './i18n' );

module.exports = Collapsable;

function Collapsable( el, options ) {
	options = options || {};
	this.initialized = false;
	this.el = el;
	this.el.classList.add( 'collapsable' );
	this.height = this.el.scrollHeight;
	this.maxHeight = options.maxHeight || 200;
	this.threshold = options.threshold || 250;
	this.expandText = options.expandText || labels.expandText;
	this.collapseText = options.collapseText || labels.collapseText;

	if ( this.height > this.threshold ) {
		this.insertCollapser();
		this.expandCollapse( 'collapse' );
		this.initialized = true;
		this.el.collapsable = this;
	}
}

function insertCollapser() {
	var container = document.createElement( 'DIV' );

	this.collapser = document.createElement( 'A' );
	this.collapser.href = '#1';
	this.collapser.className = 'collapser';
	this.collapser.addEventListener( 'click', this.expandCollapse.bind( this ) );

	container.appendChild( this.collapser );
	container.className = 'collapser-container';
	this.el.parentNode.insertBefore( container, this.el.nextSibling );
}
Collapsable.prototype.insertCollapser = insertCollapser;

function expandCollapse( direction ) {
	// Set up direction options for forcing directions and handling events.
	if ( 'object' === typeof direction ) {
		direction.preventDefault();
	} else if ( 'expand' === direction ) {
		this.collapsed = false;
	} else if ( 'collapse' === direction ) {
		this.collapsed = true;
	}

	// Toggle the events based on direction.
	if ( true === this.collapsed ) {
		this.el.style.height = this.maxHeight + 'px';
		this.el.classList.add( 'collapsed' );
		this.collapser.text = this.expandText;
		this.collapsed = false;
	} else {
		this.el.style.height = this.height + 'px';
		this.el.classList.remove( 'collapsed' );
		this.collapser.text = this.collapseText;
		this.collapsed = true;
	}
}
Collapsable.prototype.expandCollapse = expandCollapse;

function remeasureHeight() {
	// Bail if this expando wasn't initialized.
	if ( ! this.initialized ) {
		return;
	}

	// create a mask to hide our opperations.
	var mask = this.el.cloneNode( false );
	mask.style.height = 'auto';
	this.el.parentNode.insertBefore( mask, this.el );

	// put the main element into the mask
	mask.appendChild( this.el );
	mask.style.height = this.el.style.height;

	// Reset the main elements height and measure it.
	this.el.style.height = 'auto';
	this.height = this.el.scrollHeight;

	// Reset the element to the correct height.
	this.collapsed = ! this.collapsed;
	this.expandCollapse();

	// Pull the main element out of the mask and discard the mask.
	mask.style.height = 'auto';
	mask.parentNode.insertBefore( this.el, mask );
	mask.parentNode.removeChild( mask );
	mask = null;
}
Collapsable.prototype.remeasureHeight = remeasureHeight;

},{"./i18n":4}],4:[function(require,module,exports){
(function (global){
module.exports = global.jsdhI18n || {
	expandText: 'Expand',
	collapseText: 'Collapse'
};

}).call(this,typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {})
},{}]},{},[3]);
