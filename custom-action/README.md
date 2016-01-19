# Custom action plugin for [Fansoro CMS](http://fansoro.org/)

![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square "Version")
![fansoro Version](https://img.shields.io/badge/fansoro-2.x-green.svg?style=flat-square "fansoro Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/pafnuty-fansoro-plugins/fansoro-plugin-boilerplate/blob/master/LICENSE)

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
[MIT](https://github.com/pafnuty-fansoro-plugins/fansoro-plugin-boilerplate/blob/master/LICENSE)





