// ==UserScript==
// @name         Duolingo Enhancement Suite
// @namespace    http://cedbonhomme.github.io
// @version      0.9.8
// @description  Duolingo with enhancements (it is subjectif)
// @author       Cedric Bonhomme <cedbonhomme.github.io>

// @include     https://www.duolingo.com/*

// @grant        none
// ==/UserScript==

function inject(f) { //Inject the script into the document
    var script;
    script = document.createElement('script');
    script.type = 'text/javascript';
    script.setAttribute('name', 'cleaner');
    script.textContent = '(' + f.toString() + ')(jQuery)';
    document.head.insertBefore(script, document.head.firstChild);
}
inject(f);

function f($) {
    function dependencies() {
        $('body').append('<div id="has_dependencies" hidden></div>');
        $('head').append('<link rel="stylesheet" href="//anijs.github.io/lib/anicollection/anicollection.css">');
        $('head').append('<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">');
        $('head').append('<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/grid.min.css">');

        $('body').append('<script src="//anijs.github.io/lib/anijs/anijs-min.js"></script>');
        $('body').append('<script src="//anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>');
        $('body').append('<script src="//anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>');
        $('body').append('<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>');
    }

    /********************************************************************************************************************************************/

    function animateTreeSkills() {
        // Badge locked/unlocked
        $(".skill-badge-small > .skill-icon").attr("data-anijs","if: mouseover, do: flip animated");
        $(".skill-badge-small.locked > .skill-icon").attr("data-anijs","if: mouseover, do: wobble animated");

        // Scroll reveal
        $(".skill-tree-row").attr("data-anijs","if: scroll, on: window, do: fadeIn animated, before: scrollReveal");
    }
    function blurryBackgroundHack() {
        if($(".practice-intro-screen").length) {
            $("#app").addClass("glass");
        } else {
            $("#app").removeClass("glass");
        }
    }
    function centerMainPage() {
        if(! ($('#app').hasClass('settings') || $('#app').hasClass('paid-upload'))) {
            if($('#app > main').hasClass('main-left')) {
                $("#app > main").removeClass('main-left').addClass('main-center');
                $("#app > main > section.page-main.main-left").removeClass('main-left').addClass('main-center');
            } else {
                if($('#app > main').hasClass('main-right')) {
                    $("#app > main").removeClass('main-right').addClass('main-center');
                    $("#app > main > section.page-main.main-right").removeClass('main-right').addClass('main-center');
                }
            }
        }
    }
    function cleanSideBar() {
        if($(".box-social-buttons").length) {
            $(".box-social-buttons").remove();
        }
        if($(".stream-leaderboard").length) {
            $(".stream-leaderboard").remove();
        }
        if($("#friends").parents(".page-sidebar").length) {
            $("#friends").parents(".page-sidebar").remove();
        }
        if($("#word-sidebar").parents(".page-sidebar").length) {
            $("#word-sidebar").parents(".page-sidebar").remove();
        }
    }
    function duoScore() {
        $(".daily-goal-container > .daily-donut-container").empty();
        $(".daily-goal-container > .daily-donut-container").append('<span id="owl-score" class="owl owl-medium owl-standard"></span>');
        if(duo.user.get("streak_extended_today") === true) {
            $("#owl-score").removeClass("owl-happy").addClass("owl-gold");
        }
    }
    function goldenNavbar() {
        if($(".skill-done").length) {
            $(".skill-done").parent().addClass("list-lesson-item").parent().addClass("list-lessons-row").prepend('<div class="list-lesson-item"></div>').prependTo(".list-lessons");
            if($(".skill-done").parent().hasClass("gold")) {
                $("#topbar > header").removeClass("topbar-blue").addClass("topbar-gold");
                $(".topbar-nav-main").addClass("topbar-nav-gold");
            }
        }
    }
    function moveFiltersTab() {
        if(!$("#translation-tabs > ul > #filter").length) {
            $("#translation-tabs > ul").append("<li id=\"filter\" data-tab=\"filter\"><a href=\"javascript:;\">Filter</a></li>");
        }

        if(!$("#translation-tabs > #filter-tab").length) {
            $("#translation-tabs").append('<div id="filter-tab" class="panel hidden" style="display: none;"></div>');
            $("#progress-states").parent().removeClass("box-gray").attr("id", "filter-box").appendTo("#filter-tab");
        }
    }
    function moveMoreTab() {
        if(!$("#discussion-tabs > ul > #more").length) {
            $("#discussion-tabs > ul").append("<li id=\"more\" data-tab=\"more\"><a href=\"javascript:;\">+</a></li>");
        }
        if(!$("#more-tab").length) {
            $("#discussion-tabs > .comment-main").append('<div id="more-tab" class="panel hidden" style="display: none;"></div>');
            $(".incubator-ad").removeClass("box-gray").attr("id", "more-box").appendTo("#more-tab");
        }
    }
    function moveSkillProgress() {
        if($(".skill-progress").length) {
            $(".skill-progress").addClass("list-lesson-item").parent().removeClass("bg-white").addClass("list-lessons-row").prepend('<div class="list-lesson-item"></div>').prependTo(".list-lessons");
        }
    }
    function moveStatsTab() {
        if(!$("#translation-tabs > ul > #stats").length) {
            $("#translation-tabs > ul").append("<li id=\"stats\" data-tab=\"stats\"><a href=\"javascript:;\">Stats</a></li>");
        }

        if(!$("#translation-tabs > #stats-tab").length) {
            $("#translation-tabs").append('<div id="stats-tab" class="panel hidden" style="display: none;"></div>');
            $(".translator-stats").removeClass("box-colored bg-white").attr("id", "stats-box").appendTo("#stats-tab");
        }
    }
    function moveSubscriptionsTab() {
        if($(".comment-rankings").length) {
            $(".comment-rankings").attr("id", "discussion-tabs");
        }

        if(!$("#discussion-tabs > ul > #subscriptions").length) {
            $("#discussion-tabs > ul").append("<li id=\"subscriptions\" data-tab=\"subscriptions\"><a href=\"javascript:;\">Subscriptions</a></li>");
        }
        if(!$("#subscriptions-tab").length) {
            $("#discussion-tabs > .comment-main").append('<div id="subscriptions-tab" class="panel hidden" style="display: none;"></div>');
            $(".inner > .box-gray").removeClass("box-gray").attr("id", "stats-box").appendTo("#subscriptions-tab");
        }
    }
    function moveVocabularyTestButton() {
        if($("#start-flashcards").length) {
            $("#start-flashcards").appendTo("#vocabulary-list > div");
        }
    }
    function strifeSpecibus() {
        if(!$("#strife-specibus").length) {
            $("#app > main").prepend('<section id="strife-specibus" class="page-main main-center"><div id="strife-content" class="ui three column grid container" style="height: 176px"></div></section>');

            for(var $x=0 ; $x < 3 ; $x++){
                $("#strife-specibus > #strife-content").append('<div class="column"></div>');
            }

            if($(".fluency-score-actions").length) {
                $(".fluency-score-actions").remove();
                $(".fluency-container").appendTo("#strife-specibus > #strife-content > div:nth-child(3)");
            }
            $(".daily-goal-container > .teacher-coach").remove();
            duoScore();
            $(".daily-goal-container").appendTo("#strife-specibus > #strife-content > div:nth-child(2)");
            $(".daily-donut-container");
            $("#weekly-progress").addClass("strife-specibus-stats","weekly-progress").appendTo("#strife-specibus > #strife-content > div:nth-child(1)");
            $("#strife-specibus").prepend('<div class="row"><a href="/practice" class="btn btn-standard right btn-store"><span class="icon icon-practice-small-white icon-invert"></span> Practice</a></div>');
            $("#strife-specibus").hide();
        }
        $("#app > main > section.page-sidebar.sidebar-left").hide();

        // Animate opening of #strife-specibus
        $(".flag").attr("data-anijs","if: mouseover, do: rotate animated;if: click, do: slideInUp animated, to: #strife-content");

        // Toggle #strife-specibus with small flag
        $(".flag").click(function() {
            $("#strife-specibus").toggle();
        });
    }
    function smartBar() {
        if($(".sidebar-progress-main").length) {
            $("#app > main > section.page-main > div.tree > button").remove();
            $("#app > main > section.page-main > div.tree > span > h1").remove();
            $("#app > main > section.page-main > div.tree > span > span").remove();
            $(".sidebar-stats").remove();
            $("#app > main > section.page-main > div.tree > a > span").removeAttr("data-toggle title data-original-title").prependTo("#app > main > section.page-main > div.tree");

            $(".sidebar-progress-main").appendTo(".skill-tree-header");
        }
    }
    function sweetGiveUp() {
        if($("#quit-button").length) {
            $("#quit-button").prop("id", "sweet-quit-button");
        }
        $("#sweet-quit-button").click(function() {
            swal({
                title: "Are you sure?",
                text: "All progress in this session will be lost.",
                imageUrl:"//i.imgur.com/AgvwxGk.png",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, GAME OVER!",
                cancelButtonText: "No!",
                closeOnConfirm: true,
                closeOnCancel: false
            },
                 function(isConfirm){
                if (isConfirm) {
                    duo.homeRouter.navigate("/",!0);
                } else {
                    swal("Cancelled", "Your progress are safe :)", "error");
                }
            });
        });
    }
    function resetNavbar() {
        $("#topbar > header").removeClass("topbar-gold").addClass("topbar-blue");
        $(".topbar-nav-main").removeClass("topbar-nav-gold");
    }

    /********************************************************************************************************************************************/

    function main() {
        // Home
        if($('#app').hasClass('home')) {
            smartBar();

            strifeSpecibus();

            animateTreeSkills();
        }

        // Skill
        if($('#app').hasClass('skill-page-path')) {
            moveSkillProgress();

            goldenNavbar();
        } else {
            resetNavbar();
        }

        // Translation
        if($('#app').hasClass('translations')) {
            moveFiltersTab();

            moveStatsTab();
        }

        // Discussion
        if($('#app').hasClass('comment')) {
            moveSubscriptionsTab();

            moveMoreTab();
        }

        // Word
        moveVocabularyTestButton();

        // All
        cleanSideBar();

        centerMainPage();

        blurryBackgroundHack();

        sweetGiveUp();
    }

    /********************************************************************************************************************************************/

    $(document).ready(function() {
        if(!$('#has_dependencies').length) {
            dependencies();
            console.log('Duolingo Enhanceement Suite :: dependencies loaded');
        }
        main();
    });
    $(document).ajaxComplete(function(event, xhr, settings) {
        // console.log(settings.url);
        if (settings.url.indexOf('version') !== -1 || settings.url.indexOf('sessions') !== -1 || settings.url.indexOf('skills') !== -1 || settings.url.indexOf('vocabulary') !== -1 || settings.url.indexOf('topics') !== -1 || settings.url.indexOf('translations') !== -1 || settings.url.indexOf('switch_language') !== -1) {
            main();
            console.log('Duolingo Enhanceement Suite :: Ajax reload');
        }
    });
}