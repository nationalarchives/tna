(function() {
    tinymce.create('tinymce.plugins.tna', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init : function(ed, url) {

			//Cite button
            ed.addCommand('attribution', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '<cite>' + selected_text + '</cite>';
                ed.execCommand('mceInsertContent', 0, return_text);

            });

            
            ed.addButton('attribution', {
                title : 'Attribution',
                cmd : 'attribution',
                image : url + '/attribution.png',
            });
			
			//Miscellaneous blockquote
			    ed.addCommand('miscquote', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '<blockquote class="misc">' + selected_text + '</blockquote>';
                ed.execCommand('mceInsertContent', 0, return_text);

            });


            ed.addButton('miscquote', {
                title : 'Miscellaneous blockquote',
                cmd : 'miscquote',
                image : url + '/miscquote.png',
            });


            //Ancestry link
            ed.addCommand('ancestry', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[ancestry link="' + selected_text + '"]';
                ed.execCommand('mceInsertContent', 0, return_text);

            });


            ed.addButton('ancestry', {
                title : 'Ancestry.co.uk link',
                cmd : 'ancestry',
                image : url + '/ancestry.png',
            });


            //Findmypast link
            ed.addCommand('findmypast', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[findmypast link="' + selected_text + '"]';
                ed.execCommand('mceInsertContent', 0, return_text);

            });


            ed.addButton('findmypast', {
                title : 'Findmypast.co.uk link',
                cmd : 'findmypast',
                image : url + '/find-my-past.png',
            });


        },

        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
            return null;
        },

        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo : function() {
            return {
                    longname : 'TNA editor buttons',
                    author : 'Matt Blair',
                    version : "0.1"
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('tna', tinymce.plugins.tna);
})();