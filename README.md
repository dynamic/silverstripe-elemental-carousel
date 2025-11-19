# Silverstripe Elemental Carousel

A block to implement dynamic/silverstripe-carousel, a simple carousel for Silverstripe in Bootstrap

[![CI](https://github.com/dynamic/silverstripe-elemental-carousel/actions/workflows/ci.yml/badge.svg)](https://github.com/dynamic/silverstripe-elemental-carousel/actions/workflows/ci.yml) [![GitHub Sponsors](https://img.shields.io/github/sponsors/dynamic)](https://github.com/sponsors/dynamic)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-carousel/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-carousel) [![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-carousel/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-carousel) [![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-carousel/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-carousel) [![License](https://poser.pugx.org/dynamic/silverstripe-elemental-carousel/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-carousel)

## Requirements

* PHP ^8.3
* SilverStripe ^6
* dnadesign/silverstripe-elemental ^6
* dynamic/silverstripe-carousel ^3

## Installation

`composer require dynamic/silverstripe-elemental-carousel`

## Features

- **Carousel Block**: Elemental block for image carousels
- **Slide Management**: Add, reorder, and manage carousel slides in the CMS
- **Flexible Configuration**: Control transitions, autoplay, intervals, controls, and indicators
- **Bootstrap 5 Support**: Default templates optimized for Bootstrap 5
- **Content Integration**: Add rich-text content alongside carousel slides

## License

See [License](LICENSE.md)

## Usage

An Elemental block to display an image with a title, caption and link. The image can be a single image or a carousel of images.

### Template Notes

The default template assumes you are using [Bootstrap 5](https://getbootstrap.com/), and requires no additional javascript. If you are not using Bootstrap, you can use a custom template and include your own javascript.

## Getting more elements

See [Elemental modules by Dynamic](https://github.com/orgs/dynamic/repositories?q=elemental&type=all&language=&sort=)

## Configuration

See [SilverStripe Elemental Configuration](https://github.com/silverstripe/silverstripe-elemental#configuration)

## Upgrading from version 2

SilverStripe Elemental Carousel 3.0 is compatible with SilverStripe 6. Key changes:

- Updated to SilverStripe CMS 6
- Requires PHP 8.3 or higher
- Updated to Elemental 6 and Carousel 3
- No breaking changes to the API or templates

## Maintainers

 *  [Dynamic](https://www.dynamicagency.com) (<dev@dynamicagency.com>)

## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over
existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version,
 Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
