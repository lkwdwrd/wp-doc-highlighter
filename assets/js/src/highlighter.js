
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
