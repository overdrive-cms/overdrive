# Modules

Modules are located in the `/Modules` Folder. Until now there is no Database entry for each module, however each Module has a unique `module.json` file which looks like the following:

```json
{
	"name": "Static Pages",
	"slug": "StaticPages",
	"version": "1.0",
	"description": "Display pages with static content (Raw HTML). Either as text files or in a database.",
	"enabled": true
}
```

The Folder structure of a module matches the structure of the main `/app` directory and also behaves like that. Module files are namespaced with `Modules\ModuleName\`.