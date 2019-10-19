# Ready-Bootstrap-Dashboard
![](https://i.imgur.com/8hYeuW3.png)

To change the imports, head or scripts see file: _layouts/default.html
To change nav, site bar, footer or dashboard layout see file: _layouts/dashboard.html

When adding a dashboard page duplicate the index.html. Then override it's contents to your liking.
Every file begins with a small section starting and ending in "---". This is called the front matter of the file.
It is used to assign variables to the page. You'll see the variable  "layout:dashboard" for most pages. 
This allows the page content to be inserted into another layout as content. 
Where the page content is inserted into a layout is marked with "{{ content }}". 


Visit https://jekyllrb.com/docs/variables/ to see more about variables.

Visit Liquid, the templating engine, docs to see how to use control structures like conditions and loops. https://jekyllrb.com/docs/liquid/

For more about layouts: https://jekyllrb.com/docs/layouts/. 

