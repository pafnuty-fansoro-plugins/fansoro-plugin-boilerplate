# Custom action plugin for [Morfy CMS](http://morfy.org/)

![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square "Version")
![Morfy Version](https://img.shields.io/badge/Morfy-2.x-green.svg?style=flat-square "Morfy Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/pafnuty-morfy-plugins/morfy-plugin-boilerplate/blob/master/LICENSE)

This is an example of implementing a simple plugin that adds not a standard Action

## Install & Configuration
- Upload `custom-action` folder into `/plugins`.
- Go to `/config/system.yml` and add plugin name to plugins section.

Like this:
```yml
# Site Plugins
plugins:
  custom-action
```

## Usage
Add plugin action in your template file:
```
{Action::run('custom-action')}
```


## License 
[MIT](https://github.com/pafnuty-morfy-plugins/morfy-plugin-boilerplate/blob/master/LICENSE)





