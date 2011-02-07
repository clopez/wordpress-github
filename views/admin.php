<style type="text/css">
    #wpgh-settings {

    }

    #wpgh-settings tr td {
        vertical-align: top;
        padding: 10px;
    }

    #wpgh-settings input {
        width: 450px;
        border: 1px solid #ccc;
    }

    #wpgh-settings textarea {
        width: 450px;
        height: 250px;
        border: 1px solid #ccc;
    }

    p.message {
         background: #FFFBD8;
         border: 1px solid #F5EEAD;
         color: #333;
         margin: 10px 5px 5px 5px;
         padding: 10px;
    }

    #wpgh_info {
        padding: 10px;
        background: #f7f7f7;
        border: 2px dashed #69A74E;
        margin-right: 10px;
        float:right;
        width: 250px;
    }

    #wpgh_info .name {
        color: #69A74E;
        font-weight: bold;
    }
    
</style>
<h2>GitHub/BitBucket Project Lister</h2>

<?php if($wpgh_updated): ?>
    <p class="message">
        Your settings have been updated.
    </p>
<?php endif; ?>

<div id="wpgh_info">
    Written by <span class="name">Kenny Katzgrau</span> (<a href="http://twitter.com/_kennyk_">@_kennyk_)</a>.
    Find him at <a href="http://codefury.net/">codefury.net</a>. Reach him via <a href="mailto:katzgrau@gmail.com">katzgrau@gmail.com</a> with any questions!
</div>

<p>
    There are two ways of listing your projects on your blog: In a post/page, or
     via the sidebar. You can use either or both methods.
</p>


<p>
    <strong>In order to list your projects inside a post or page, just place:</strong>
<p>
<pre>
    {{github:username}}
</pre>
<p>
    in the post where you'd like the list to show up. You can include projects from multiple places.
    You can also edit the template used to list your projects inside a page below.
</p>
<pre>
    {{github:username, bitbucket:katzgrau}}
</pre>

<p>
    <strong>To add your projects as a widget (like a sidebar widget)</strong>, go to the widgets page and look for the
    'GitHub Projects' widget. Drag it to the area where you need it. For the 'Sources'
    field, enter your projects in the same format above, but without the braces.
</p>

<h3>In-page Project Listing Format</h3>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <table id="wpgh-settings">
        <tr>
            <td>
                Pre-List Markup (HTML)
            </td>
            <td>
                <input name="wpgh_opener" type="text" value="<?php echo $wpgh_opener; ?>" />
            </td>
            <td>
                This will be inserted before your projects are listed.
            </td>
        </tr>
        <tr>
            <td>
                List Template
            </td>
            <td>
                <textarea name="wpgh_template" <?php echo $wpgh_template; ?></textarea>
            </td>
            <td>
                This template will be output for every project that comes back 
                in the list. You can use these pseudo-variables:
                <ul>
                    <li>{{PROJECT_NAME}}</li>
                    <li>{{PROJECT_URL}}</li>
                    <li>{{PROJECT_DESCRIPTION}}</li>
                    <li>{{PROJECT_WATCHER_COUNT}}</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                Pre-List Markup (HTML)
            </td>
            <td>
                <input name="wpgh_closer" type="text" value="<?php echo $wpgh_closer; ?>" />
            </td>
            <td>
                This will be inserted after your projects are listed.
            </td>
        </tr>
        <tr>
            <td>
                Save
            </td>
            <td>
                <input name="wpgh_submit" type="submit" value="Save!" />
            </td>
            <td>
            </td>
        </tr>
    </table>
</form>
<?php