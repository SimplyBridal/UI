'use strict';

/**
 *  Uploader
 *
 *      params:
 *
 *      code:
 *          <Uploader />
 *
 */

let ui = ui || {};
ui.Uploader = React.createClass({
 
    getDefaultProps: function() {
        return {};
    },

    // --------------------------------------------------------------------------------
    // helper
    // --------------------------------------------------------------------------------
    

    // --------------------------------------------------------------------------------
    // event
    // --------------------------------------------------------------------------------
    
    handleFile(e) {
        if (this.props.listenFile) {
            this.props.listenFile(e);
        }
    },

    // --------------------------------------------------------------------------------
    // render
    // Read only: readOnly=true
    // --------------------------------------------------------------------------------
    render() {
        
        
        return (
            <input type="file" onChange={this.handleFile} />
        );
    },
});


