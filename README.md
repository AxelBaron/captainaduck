# Project Name
This readme doesn't mean you can't communicate with your co-workers ! If you have any doubts, just ask for help !
Don't forget to fill the admin client section for backoffice password and identification.

## Who is in charge ?
- Who launch the project ?
- Who is the master ?
- Date de lancement


## How to install
### Requirements
- server technology
- php versions etc
- frameworks
- Others


### CMS specifications
- Where is config file ?
- Virtual host specifications ?
- Enable / Disabled cache or debug mode.
- Other

### Special command to run
- Import products
- Clear cache
- Clear URL path
- Other

### Database
- Which base use on georges
- DB is not on georges :
	- Why ?
	- Where is the dump of the DB ?
	- What are DB settings and technologies to use ?
- Other


### Branch system
- Description of the branch system used in this project. ( Git flow ? )
- Who have the power to merge on master ( or other specific branch ) ?
- Other


## How to compile/use CSS and JSS system
This website use node.js and gulp system.

### Install the system
On first install run this command:
```shell
npm install
```
_More details see: [package.json](/package.json)_


### Where put my files ?
Don't put files in `/dist` folder because files are compiled here. You have to work only on `/src` folder.


### CSS libraries
- Put the CSS libraries here `src/scss/vendors`
- Rename the file like `_v-LIBRARY-NAME`
- Import your library on `src/_vendors` file with this line `@import "vendors/v-LIBRARY-NAME";`

### JS Libraries
- Put the JS libraries here `src/js/vendors`
- That's it ! You can compile


### Compile
2 mods :
* dev : compile in `/dist`  folder without compress CSS & JS. You can easily read compiled (not minified) version of SCSS and JS files.
* build : compile in `/dist` folder with all minification and uglification for a production use.
```shell
npm run dev
[OR]
npm run build
```

### Optional
* [LiveReload](http://livereload.com/extensions/) extention

When the project is watching `npm run watch`, the CSS/JS files will now refresh automatically.


## Developement back section
- Naming convention for function method and others.

## Other
...
