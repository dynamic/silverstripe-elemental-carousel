# Silverstripe Elemental Carousel

An Elemental block to implement [dynamic/silverstripe-carousel](https://github.com/dynamic/silverstripe-carousel), allowing you to add a carousel to your Silverstripe CMS website. This module integrates with [Silverstripe Elemental](https://github.com/silverstripe/silverstripe-elemental), providing a flexible way to display multiple images or videos in a dynamic and customizable carousel format.

[![CI](https://github.com/dynamic/silverstripe-elemental-carousel/actions/workflows/ci.yml/badge.svg)](https://github.com/dynamic/silverstripe-elemental-carousel/actions/workflows/ci.yml)  
[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-carousel/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-carousel)  
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-carousel/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-carousel)  
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-carousel/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-carousel)  

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
  - [Adding an Elemental Carousel Block](#adding-an-elemental-carousel-block)
  - [Working with Images and Videos](#working-with-images-and-videos)
- [Customization](#customization)
  - [Creating Custom Templates](#creating-custom-templates)
- [Related Modules](#related-modules)
- [Maintainers](#maintainers)
- [Bugtracker](#bugtracker)
- [Development and Contribution](#development-and-contribution)
- [License](#license)

## Requirements

- Silverstripe CMS ^5.0
- [dnadesign/silverstripe-elemental](https://github.com/dnadesign/silverstripe-elemental) ^5.0
- [dynamic/silverstripe-carousel](https://github.com/dynamic/silverstripe-carousel) ^2.0

## Installation

Install via Composer:

```sh
composer require dynamic/silverstripe-elemental-carousel
```

Run a dev/build to regenerate the manifest:

```sh
./vendor/bin/sake dev/build
```

## Configuration

After installation, the `ElementCarouselBlock` will be available for use within the Silverstripe Elemental editor.

## Usage

### Adding an Elemental Carousel Block

1. In the CMS, navigate to a page where Elemental blocks are enabled.
2. Click **Add Block** and select **Carousel Block**.
3. Use the block settings to configure the carousel.

### Working with Images and Videos

The block supports two types of content:

- **Images**: Upload and display a sequence of images.
- **Videos**: Embed video links from YouTube, Vimeo, or other platforms.

To add content:
1. Open the **Carousel Block** in the CMS.
2. Click **Add Slide** and select an Image or Video.
3. If adding an Image:
   - Upload an image.
   - Optionally, add a caption or link.
4. If adding a Video:
   - Provide the video URL.
   - Optionally, add a caption.

## Customization

### Creating Custom Templates

The default template assumes you are using [Bootstrap 5](https://getbootstrap.com/). If you are not using Bootstrap, you can create a custom template:

1. **Locate the Default Template**  
   The default template is located at:
   ```
   templates/Dynamic/ElementalCarousel/Includes/CarouselBlock.ss
   ```

2. **Copy to Your Theme**  
   Copy the `CarouselBlock.ss` file to your theme’s directory:
   ```
   themes/your-theme/templates/Dynamic/ElementalCarousel/Includes/CarouselBlock.ss
   ```

3. **Modify the Template**  
   Edit the copied `CarouselBlock.ss` file to:
   - Adjust the HTML structure.
   - Modify CSS classes.
   - Add or remove elements.

4. **Include Necessary Assets**  
   Ensure your project includes JavaScript or CSS required for the carousel.

For more details, refer to the [Silverstripe CMS Documentation](https://docs.silverstripe.org/en/5/developer_guides/templates/).

## Related Modules

This module is part of a suite of Elemental modules. Other modules that use `silverstripe-carousel` include:

- [Silverstripe Carousel](https://github.com/dynamic/silverstripe-carousel)
- [Silverstripe Elemental Blocks](https://github.com/dnadesign/silverstripe-elemental)

For additional Elemental modules, see [Dynamic’s Elemental Modules](https://github.com/orgs/dynamic/repositories?q=elemental&type=all&language=&sort=).

## Maintainers

- [Dynamic](https://www.dynamicagency.com) (<dev@dynamicagency.com>)

## Bugtracker

Bugs are tracked in the issues section of this repository. Before submitting an issue, please review existing issues to ensure yours is unique.

If the issue appears to be new:

- Create a new issue.
- Describe the steps required to reproduce your issue and the expected outcome. Unit tests, screenshots, and screencasts can help here.
- Provide details about your environment:
  - Silverstripe version
  - Browser and version
  - PHP version
  - Operating system
  - Any installed Silverstripe modules

**Security Issues:**  
Please report security issues to the module maintainers directly. Avoid filing security issues in the bugtracker.

## Development and Contribution

We welcome contributions! Please ensure you raise a pull request and discuss with the module maintainers.

## License

This module is licensed under the BSD-3-Clause License. See the [LICENSE](LICENSE.md) file for details.

