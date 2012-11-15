#WPColumns#

After testing several plugins that claimed to allow for displaying post/page content in columns I found that most of them either didn't work at all, or only partially worked due to not being updated for changes to the WordPress core.

I originally combined a custom post type with a simple shortcode function to display the appropriate post content in columns, but found this much too cumbersome and time-consuming to update so I set about developing a new method that involved as little time and effort as possible. Thus, WPColumns was born!

##Installation##

1. [Download](https://github.com/Ultrabenosaurus/WPColumns/archive/master.zip) the plugin
2. Login to your WordPress admin panel
3. Go to *Plugins > Add New > Upload*
4. Browse to the ZIP file you downloaded in step one
5. Click *Install Now*
6. Activate the plugin

##Usage##

Once installed, simply go to a page or post you wish to have columns in and add in the shortcodes as below:

```
[columns count=2]
[column]
This is some text to be in the first column.
[column close=true]
[column]
this is the second column, I hope you enjoy reading it.
[column close=true]
[columns close=true]
```

Make sure you include the `count` parameter with an integer value in the opening `columns` shortcode as this is used to assign the appropriate class for sizing and positioning of the columns.

You can have multiple column areas on the page and there is no limit to how many columns can be in each area, but by default this plugin supports either 2 or 3 columns per area.

To end a column or column area, simply pass the `close` parameter with any value other than `false`.

Optionally, both the `columns` and `column` shortcodes accept a `class` parameter. Any value in here will be added to the corresponding `div` element to allow you to add extra styling to your columns without modifying the default classes (makes updating the plugin easier, should I ever make any changes to it).

##License##

As usual with my work, this project is available under the BSD 3-Clause license. In short, you can do whatever you want with this code as long as:

* I am always recognised as the original author.
* I am not used to advertise any derivative works without prior permission.
* You include a copy of said license and attribution with any and all redistributions of this code, including derivative works.

For more details, read the included [LICENSE.md](https://github.com/Ultrabenosaurus/WPColumns/blob/master/LICENSE.md) file or read about it on [opensource.org](http://opensource.org/licenses/BSD-3-Clause).