# Readme
This my simple self-host commenting system. **currently only aviable in german**.   
[In action at my blog](http://lukasepple.de/blog/)
## Installing
Upload everything to your Server.

* Change `$txt_dir` to `/path/to/comments/txt`
* Add in your posts-template:

```
<iframe src="/path/to/comments/display.php?id=$id"></iframe>
```
`$id` should be replaced by a expression (of your templating language) that display's an unique id or something similar.
