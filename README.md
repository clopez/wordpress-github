# Wordpress Plugin: GitHub and BitBucket Project Lister

This is a Wordpress plugin that will list your open source projects from
github or bitbucket (or both). You can have them inserted in a standard post
or page, or have them inserted in your sidebar.

## Maintainer

This project is maintained by [Kenny Katzgrau](http://codefury.net) [@_kennyk_](http://twitter.com/_kennyk_). It
was supposed to be a quick project, but I got really into it.

## Examples

### Insert in a page or post

Once you install the plug-in (see below), create a page (or open one) where you'd like
your projects to be listed. On my personal website, this would be my '[Projects](http://codefury.net/projects)'
page, which I was tired of updating :)

At the point where you'd like to insert your projects, put:

`{{github:your_username}}`

So for me, that was `{{github:katzgrau}}`. But if you'd like to include projects
from multiple sources, you can do something like this:

`{{github:username,bitbucket:username}}`

So for me, that was `{{github:katzgrau,bitbucket:katzgrau}}`

### Insert in the sidebar (or some other widgety place)

This plugin also comes with a widget. Go to your Wordpress widgets page, and
activate the 'GitHub Projects' widget.

The 'Title' field is label for the widget listing. You might want to just put "Projects".

For 'Sources', put in a project string like: `github:your_username`. I use something like:

`github:katzgrau,bitbucket:katzgrau`

## Customization

You can edit _how_ projects are listed on the settings page. Look for the
'Github/BitBucket' settings link in the Wordpress admin panel.

## Other details

The plugin caches your projects for 1 hour. If you'd like to configure this, hack
 the plugin :)

Caching is done via another project of mine, WP-Easy-Cache.

## License (MIT)

Copyright (C) 2011 by Kenny Katzgrau <katzgrau@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.