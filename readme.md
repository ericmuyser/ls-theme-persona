Instructions for LemonStand theme: "Persona"
===================================================================================================


Installation
---------------------------------------------------------------------------------------------------

This package contains a CMS export of the theme, with file name `cms.lca`. In order to import this 
theme, please follow these instructions.  
1. Log in to your LemonStand store.  
2. Select the `CMS` section from the menu.  
3. Select `Themes` from the sub-menu. If you do not see `Themes`, please make sure your installation is up-to-date.  
4. Choose `Import theme`.  
5. Click `Choose file`, locate and select `persona.lca` from your harddrive, and then choose `Import`.  
6. Allow LemonStand to upload and import the CMS theme.  
7. Follow the configuration instructions below.  

Please note the CMS templates (pages, partials, layouts) will be merged with any already existing 
in your store. Alternatively, and for version control, the `templates` directory contains filesystem CMS templates.

This package contains module dependencies, located in the `modules` directory. Please follow these instructions.  
1. In the `modules` directory, please select all folders, right click, and copy them.  
2. Go to the `modules` directory in your LemonStand installation, right click, and paste them.  


Configuration
---------------------------------------------------------------------------------------------------

These instructions assume that you already have this theme imported into your LemonStand store.

Much of this theme can be customized through the `site:settings` CMS partial. This includes company 
title, social networking links, meta data, page paths (must match 
existing pages), and more.

Site settings can be accessed in the following way, for example: `$site_settings->company->title` or 
`$this->render_partial('site:settings')->company->title`.


Notes
---------------------------------------------------------------------------------------------------  
- Any PSDs used to create the layout, are in the `design` folder.  
- Dialog message box text is located in the `themes/persona/resources/js/main.js` file.  

Support
---------------------------------------------------------------------------------------------------

Please visit the LemonStand forums (http://forum.lemonstandapp.com/) for community support.


Bugs & Updates
---------------------------------------------------------------------------------------------------

Please check the repository for updates: https://github.com/ericmuyser/ls-theme-persona
