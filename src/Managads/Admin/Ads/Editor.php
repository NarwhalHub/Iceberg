<?php
namespace Managads\Admin\Ads;

class Editor
{
    public function __construct($ad_id = null)
    {
    }

    public function render()
    {
        ?>
        <div class="wrap">
            <h1 class="wp-heading-inline">
                Edit Chapter</h1>

            <a href="http://new.loveofboys.io/wp-admin/post-new.php?post_type=chapter&amp;data_type=comic"
                class="page-title-action">Add New</a>
            <hr class="wp-header-end">
            <div id="lost-connection-notice" class="error hidden">
                <p><span class="spinner"></span> <strong>Connection lost.</strong> Saving has been disabled until you’re
                    reconnected. <span class="hide-if-no-sessionstorage">We’re backing up this post in your browser, just in
                        case.</span>
                </p>
            </div>
            <div id="local-storage-notice" class="hidden notice is-dismissible">
                <p class="local-restore">
                    The backup of this post in your browser is different from the version below. <button type="button"
                        class="button restore-backup">Restore the backup</button>
                </p>
                <p class="help">
                    This will replace the current editor content with the last backup version. You can use undo and redo in the
                    editor to get the old content back or to return to the restored version. </p>
                <button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this
                        notice.</span></button>
            </div>


            <form name="post" action="post.php" method="post" id="post">
                <input type="hidden" id="_wpnonce" name="_wpnonce" value="6847457ec2"><input type="hidden"
                    name="_wp_http_referer" value="/wp-admin/post.php?post=22906&amp;action=edit"><input type="hidden"
                    id="user-id" name="user_ID" value="1">
                <input type="hidden" id="hiddenaction" name="action" value="editpost">
                <input type="hidden" id="originalaction" name="originalaction" value="editpost">
                <input type="hidden" id="post_author" name="post_author" value="1">
                <input type="hidden" id="post_type" name="post_type" value="chapter">
                <input type="hidden" id="original_post_status" name="original_post_status" value="publish">
                <input type="hidden" id="referredby" name="referredby"
                    value="http://new.loveofboys.io/wp-admin/edit.php?post_type=chapter&amp;data_type=comic">
                <input type="hidden" id="active_post_lock" value="1577119785:1">
                <input type="hidden" name="_wp_original_http_referer"
                    value="http://new.loveofboys.io/wp-admin/edit.php?post_type=chapter&amp;data_type=comic"><input
                    type="hidden" id="post_ID" name="post_ID" value="22906"><input type="hidden" id="meta-box-order-nonce"
                    name="meta-box-order-nonce" value="c79923ff9e"><input type="hidden" id="closedpostboxesnonce"
                    name="closedpostboxesnonce" value="8ebdf14375">

                <div id="poststuff">
                    <div id="post-body" class="metabox-holder columns-2">
                        <div id="post-body-content">

                            <div id="titlediv">
                                <div id="titlewrap">
                                    <label class="screen-reader-text" id="title-prompt-text" for="title">Add title</label>
                                    <input type="text" name="post_title" size="30" value="Mở đầu" id="title" spellcheck="true"
                                        autocomplete="off">
                                </div>
                                <div class="inside">
                                    <div id="edit-slug-box" class="hide-if-no-js">
                                        <strong>Permalink:</strong>
                                        <a id="sample-permalink"
                                            href="http://new.loveofboys.io/boyloves/phat-vo-duyen/mo-dau">http://new.loveofboys.io/boyloves/phat-vo-duyen/mo-dau</a>
                                    </div>
                                </div>
                                <input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="2db79f70c0">
                            </div><!-- /titlediv -->
                        </div><!-- /post-body-content -->

                        <div id="postbox-container-1" class="postbox-container">
                            <div id="side-sortables" class="meta-box-sortables ui-sortable">
                                <div id="submitdiv" class="postbox ">
                                    <button type="button" class="handlediv" aria-expanded="true"><span
                                            class="screen-reader-text">Toggle panel: Publish</span><span
                                            class="toggle-indicator" aria-hidden="true"></span></button>
                                    <h2 class="hndle ui-sortable-handle"><span>Publish</span></h2>
                                    <div class="inside">
                                        <div class="submitbox" id="submitpost">

                                            <div id="minor-publishing">

                                                <div style="display:none;">
                                                    <p class="submit"><input type="submit" name="save" id="save" class="button"
                                                            value="Save"></p>
                                                </div>

                                                <div id="minor-publishing-actions">
                                                    <div id="save-action">
                                                    </div>
                                                    <div id="preview-action">
                                                        <a class="preview button"
                                                            href="http://new.loveofboys.io/boyloves/phat-vo-duyen/mo-dau?preview=true"
                                                            target="wp-preview-22906" id="post-preview">Preview Changes<span
                                                                class="screen-reader-text"> (opens in a new tab)</span></a>
                                                        <input type="hidden" name="wp-preview" id="wp-preview" value="">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div><!-- #minor-publishing-actions -->

                                                <div id="misc-publishing-actions">

                                                    <div class="misc-pub-section misc-pub-post-status">
                                                        Status: <span id="post-status-display">
                                                            Published</span>
                                                        <a href="#post_status" class="edit-post-status hide-if-no-js"
                                                            role="button"><span aria-hidden="true">Edit</span> <span
                                                                class="screen-reader-text">Edit status</span></a>

                                                        <div id="post-status-select" class="hide-if-js">
                                                            <input type="hidden" name="hidden_post_status"
                                                                id="hidden_post_status" value="publish">
                                                            <label for="post_status" class="screen-reader-text">Set
                                                                status</label>
                                                            <select name="post_status" id="post_status">
                                                                <option selected="selected" value="publish">Published</option>
                                                                <option value="pending">Pending Review</option>
                                                                <option value="draft">Draft</option>
                                                            </select>
                                                            <a href="#post_status"
                                                                class="save-post-status hide-if-no-js button">OK</a>
                                                            <a href="#post_status"
                                                                class="cancel-post-status hide-if-no-js button-cancel">Cancel</a>
                                                        </div>

                                                    </div><!-- .misc-pub-section -->

                                                    <div class="misc-pub-section misc-pub-visibility" id="visibility">
                                                        Visibility: <span id="post-visibility-display">
                                                            Public</span>
                                                        <a href="#visibility" class="edit-visibility hide-if-no-js"
                                                            role="button"><span aria-hidden="true">Edit</span> <span
                                                                class="screen-reader-text">Edit visibility</span></a>

                                                        <div id="post-visibility-select" class="hide-if-js">
                                                            <input type="hidden" name="hidden_post_password"
                                                                id="hidden-post-password" value="">
                                                            <input type="hidden" name="hidden_post_visibility"
                                                                id="hidden-post-visibility" value="public">
                                                            <input type="radio" name="visibility" id="visibility-radio-public"
                                                                value="public" checked="checked"> <label
                                                                for="visibility-radio-public"
                                                                class="selectit">Public</label><br>
                                                            <input type="radio" name="visibility" id="visibility-radio-password"
                                                                value="password"> <label for="visibility-radio-password"
                                                                class="selectit">Password protected</label><br>
                                                            <span id="password-span"><label
                                                                    for="post_password">Password:</label> <input type="text"
                                                                    name="post_password" id="post_password" value=""
                                                                    maxlength="255"><br></span>
                                                            <input type="radio" name="visibility" id="visibility-radio-private"
                                                                value="private"> <label for="visibility-radio-private"
                                                                class="selectit">Private</label><br>

                                                            <p>
                                                                <a href="#visibility"
                                                                    class="save-post-visibility hide-if-no-js button">OK</a>
                                                                <a href="#visibility"
                                                                    class="cancel-post-visibility hide-if-no-js button-cancel">Cancel</a>
                                                            </p>
                                                        </div>

                                                    </div><!-- .misc-pub-section -->

                                                    <div class="misc-pub-section curtime misc-pub-curtime">
                                                        <span id="timestamp">
                                                            Published on: <b>Nov 20, 2019 at 18:36</b> </span>
                                                        <a href="#edit_timestamp" class="edit-timestamp hide-if-no-js"
                                                            role="button">
                                                            <span aria-hidden="true">Edit</span>
                                                            <span class="screen-reader-text">Edit date and time</span>
                                                        </a>
                                                        <fieldset id="timestampdiv" class="hide-if-js">
                                                            <legend class="screen-reader-text">Date and time</legend>
                                                            <div class="timestamp-wrap"><label><span
                                                                        class="screen-reader-text">Month</span><select id="mm"
                                                                        name="mm">
                                                                        <option value="01" data-text="Jan">01-Jan</option>
                                                                        <option value="02" data-text="Feb">02-Feb</option>
                                                                        <option value="03" data-text="Mar">03-Mar</option>
                                                                        <option value="04" data-text="Apr">04-Apr</option>
                                                                        <option value="05" data-text="May">05-May</option>
                                                                        <option value="06" data-text="Jun">06-Jun</option>
                                                                        <option value="07" data-text="Jul">07-Jul</option>
                                                                        <option value="08" data-text="Aug">08-Aug</option>
                                                                        <option value="09" data-text="Sep">09-Sep</option>
                                                                        <option value="10" data-text="Oct">10-Oct</option>
                                                                        <option value="11" data-text="Nov" selected="selected">
                                                                            11-Nov</option>
                                                                        <option value="12" data-text="Dec">12-Dec</option>
                                                                    </select></label> <label><span
                                                                        class="screen-reader-text">Day</span><input type="text"
                                                                        id="jj" name="jj" value="20" size="2" maxlength="2"
                                                                        autocomplete="off"></label>, <label><span
                                                                        class="screen-reader-text">Year</span><input type="text"
                                                                        id="aa" name="aa" value="2019" size="4" maxlength="4"
                                                                        autocomplete="off"></label> at <label><span
                                                                        class="screen-reader-text">Hour</span><input type="text"
                                                                        id="hh" name="hh" value="18" size="2" maxlength="2"
                                                                        autocomplete="off"></label>:<label><span
                                                                        class="screen-reader-text">Minute</span><input
                                                                        type="text" id="mn" name="mn" value="36" size="2"
                                                                        maxlength="2" autocomplete="off"></label></div><input
                                                                type="hidden" id="ss" name="ss" value="40">

                                                            <input type="hidden" id="hidden_mm" name="hidden_mm" value="11">
                                                            <input type="hidden" id="cur_mm" name="cur_mm" value="12">
                                                            <input type="hidden" id="hidden_jj" name="hidden_jj" value="20">
                                                            <input type="hidden" id="cur_jj" name="cur_jj" value="23">
                                                            <input type="hidden" id="hidden_aa" name="hidden_aa" value="2019">
                                                            <input type="hidden" id="cur_aa" name="cur_aa" value="2019">
                                                            <input type="hidden" id="hidden_hh" name="hidden_hh" value="18">
                                                            <input type="hidden" id="cur_hh" name="cur_hh" value="23">
                                                            <input type="hidden" id="hidden_mn" name="hidden_mn" value="36">
                                                            <input type="hidden" id="cur_mn" name="cur_mn" value="49">

                                                            <p>
                                                                <a href="#edit_timestamp"
                                                                    class="save-timestamp hide-if-no-js button">OK</a>
                                                                <a href="#edit_timestamp"
                                                                    class="cancel-timestamp hide-if-no-js button-cancel">Cancel</a>
                                                            </p>
                                                        </fieldset>
                                                    </div>

                                                </div>
                                                <div class="clear"></div>
                                            </div>

                                            <div id="major-publishing-actions">
                                                <div id="delete-action">
                                                    <a class="submitdelete deletion"
                                                        href="http://new.loveofboys.io/wp-admin/post.php?post=22906&amp;action=trash&amp;_wpnonce=d816ba7d58">Move
                                                        to Trash</a>
                                                </div>

                                                <div id="publishing-action">
                                                    <span class="spinner"></span>
                                                    <input name="original_publish" type="hidden" id="original_publish"
                                                        value="Update">
                                                    <input name="save" type="submit" class="button button-primary button-large"
                                                        id="publish" value="Update">
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="postimagediv" class="postbox ">
                                    <button type="button" class="handlediv" aria-expanded="true"><span
                                            class="screen-reader-text">Toggle panel: Featured Image</span><span
                                            class="toggle-indicator" aria-hidden="true"></span></button>
                                    <h2 class="hndle ui-sortable-handle"><span>Featured Image</span></h2>
                                    <div class="inside">
                                        <p class="hide-if-no-js"><a
                                                href="http://new.loveofboys.io/wp-admin/media-upload.php?post_id=22906&amp;type=image&amp;TB_iframe=1&amp;width=753&amp;height=200"
                                                id="set-post-thumbnail" class="thickbox">Set featured image</a></p><input
                                            type="hidden" id="_thumbnail_id" name="_thumbnail_id" value="-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="postbox-container-2" class="postbox-container">
                            <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                                <div id="cominovel_chapter_images" class="postbox ">
                                    <button type="button" class="handlediv" aria-expanded="true"><span
                                            class="screen-reader-text">Toggle panel: Upload Chapter Images</span><span
                                            class="toggle-indicator" aria-hidden="true"></span></button>
                                    <h2 class="hndle ui-sortable-handle"><span>Upload Chapter Images</span></h2>
                                    <div class="inside">
                                        <div id="cominovel_chapter_images" class="wallery">
                                            <div class="select-image-box">
                                                <div class="wrapper">
                                                    <div class="outline">
                                                        <i class="wallery-upload"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wallery-toolbars">
                                                <div class="wallery-toolbar-inner">
                                                    <div class="toolbar image-layouts">
                                                        <h2 class="heading-images">
                                                            Chapter Images </h2>
                                                        <div class="layouts">
                                                            <div class="layout layout-list">
                                                                <span class="wallery-list"></span>
                                                            </div>
                                                            <div class="layout layout-thumbnail">
                                                                <span class="wallery-layout"></span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="images-list ui-sortable">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="commentsdiv" class="postbox ">
                                    <button type="button" class="handlediv" aria-expanded="true"><span
                                            class="screen-reader-text">Toggle panel: Comments</span><span
                                            class="toggle-indicator" aria-hidden="true"></span></button>
                                    <h2 class="hndle ui-sortable-handle"><span>Comments</span></h2>
                                    <div class="inside">
                                        <input type="hidden" id="add_comment_nonce" name="add_comment_nonce" value="67be73d9c5">
                                        <p class="hide-if-no-js" id="add-new-comment"><button type="button" class="button"
                                                onclick="window.commentReply &amp;&amp; commentReply.addcomment(22906);">Add
                                                Comment</button></p>
                                        <input type="hidden" id="_ajax_fetch_list_nonce" name="_ajax_fetch_list_nonce"
                                            value="7748e36825"><input type="hidden" name="_wp_http_referer"
                                            value="/wp-admin/post.php?post=22906&amp;action=edit">
                                        <table class="widefat fixed striped comments wp-list-table comments-box"
                                            style="display:none;">
                                            <tbody id="the-comment-list" data-wp-lists="list:comment">
                                            </tbody>
                                        </table>
                                        <p id="no-comments">No comments yet.</p>
                                        <div class="hidden" id="trash-undo-holder">
                                            <div class="trash-undo-inside">
                                                Comment by <strong></strong> moved to the trash. <span class="undo untrash"><a
                                                        href="#">Undo</a></span>
                                            </div>
                                        </div>
                                        <div class="hidden" id="spam-undo-holder">
                                            <div class="spam-undo-inside">
                                                Comment by <strong></strong> marked as spam. <span class="undo unspam"><a
                                                        href="#">Undo</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="slugdiv" class="postbox  hide-if-js" style="">
                                    <button type="button" class="handlediv" aria-expanded="true"><span
                                            class="screen-reader-text">Toggle panel: Slug</span><span class="toggle-indicator"
                                            aria-hidden="true"></span></button>
                                    <h2 class="hndle ui-sortable-handle"><span>Slug</span></h2>
                                    <div class="inside">
                                        <label class="screen-reader-text" for="post_name">Slug</label><input name="post_name"
                                            type="text" size="13" id="post_name" value="mo-dau">
                                    </div>
                                </div>
                            </div>
                            <div id="advanced-sortables" class="meta-box-sortables ui-sortable"></div>
                        </div>
                    </div><!-- /post-body -->
                    <br class="clear">
                </div><!-- /poststuff -->
            </form>
        </div>
        <?php
    }
}