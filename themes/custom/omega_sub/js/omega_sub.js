
(function ($, Drupal, drupalSettings, Backbone, Modernizr) {

    "use strict";

    /**
     * Container for easy storage and retrieval of variables in the DOM
     *
     * Configurable Javascript is available with drupalSettings (the successor to Drupal 7's Drupal.settings).
     * However, to make drupalSettings available to our JavaScript file: we have to declare a dependency on it.
     *
     * @requires drupalSettings as dependency omega_sub.libraries.yml
     * @see https://www.drupal.org/node/2274843#configurable
     * @see omega_sub/js/README.md
     * @type {{object}}
     */
    drupalSettings.omega_sub = {
        'config' : {
            'sample_variable': true
        }
    };

    /**
     * Sample of Drupal.behaviors
     *
     * @see https://www.drupal.org/node/2269515
     * @see omega_sub/js/README.md
     * @type {{attach: Drupal.behaviors.myCustomSubthemeBehavior.attach}}
     */
    Drupal.behaviors.myCustomSubthemeBehavior = {
        attach: function (context, settings) {
            $(context).find('input.css-class').once('myCustomSubthemeBehavior').each(function () {
                // Apply the myCustomSubthemeBehavior effect to the elements only once.
            });
        }
    };

})(jQuery, Drupal, drupalSettings, Backbone, Modernizr);

(function ($, Drupal, drupalSettings) {
    'use strict';
    Drupal.behaviors.teamBehavior = {
        attach: function (context, settings) {
            $(context).find('.field--name-field-user-image').mouseover(function () {
                $(this).removeClass('field--name-field-user-image');
            });

            $(context).find('.field--name-field-user-image').mouseout(function () {
                $(this).addClass('field--name-field-user-image');
            });
        }
    };

    Drupal.behaviors.teamToggleBehavior = {
        attach: function (context, settings) {
            $(context).find('.view-display-id-our_team_full').find('.views-row').addClass('hide');

            // team view page
            $(context).find('.control-team-col').click(function () {
                // console.log($.trim($(this).find('.user--view-mode-user-teaser').attr('data-quickedit-entity-id')));

                $(context).find('.view-display-id-our_team_teaser').find('.views-view-grid').toggleClass('hide');

                var entityId = $.trim($(this).find('.field--name-dynamic-token-fielduser-user-id p').html());
                $(context).find('.view-display-id-our_team_full').find('.field--name-dynamic-token-fielduser-user-id p').each(function(i){
                    if($(this).html() == entityId){
                        $(this).parents('.views-row').toggleClass('hide');
                    }
                });
            });

            // team view attachment group left
            $(context).find('.view-display-id-our_team_full').find('.group-left').click(function () {
                $(context).find('.view-display-id-our_team_teaser').find('.views-view-grid').toggleClass('hide');
                $(this).parents('.views-row').toggleClass('hide');
            });

            // team view attachment go back
            $(context).find('.view-display-id-our_team_full').find('.field--name-dynamic-token-fielduser-go-back').click(function () {
                $(context).find('.view-display-id-our_team_teaser').find('.views-view-grid').toggleClass('hide');
                $(this).parents('.views-row').toggleClass('hide');
            });


        }
    };

})(jQuery, Drupal, drupalSettings);
