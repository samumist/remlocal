## README

### Child Theme Overview

This child theme is built upon the remui theme, enhancing and customizing its features. The file structure of the child theme is organized as follows:


├── config.php
├── fonts
├── lang
├── layout
├── lib.php
├── Readme.md
├── snippet
├── style
├── templates
└── version.php

### File Descriptions

1. **config.php**

   The `config.php` file serves as the central configuration hub for basic settings. Modify this file to customize the foundational aspects of the child theme.

2. **fonts**

   The `fonts` directory houses custom fonts that are utilized by the child theme.

3. **lang**

   The `lang` directory contains essential language strings required by Moodle for the proper functioning of the child theme.

4. **layout**

   This directory is an exact replica of the parent theme's layout. It ensures the seamless operation of custom pages. It is crucial to validate and update this folder after each parent theme update.

5. **lib.php**

   The `lib.php` file includes skeleton functions necessary for the child theme's functionality. Additionally, custom CSS is defined within this file.

6. **snippet**

   The `snippet` directory contains atto snippet presets, contributing to enhanced content creation within Moodle.

7. **style**

   Custom CSS rules are stored in the `style` directory. Tailor these styles to align with the design and branding preferences of your Moodle instance.

8. **templates**

   Overwritten templates are stored in the `templates` directory, allowing for a tailored user interface that aligns with the child theme's design.

9. **version.php**

   Every Moodle plugin, including this child theme, must have a `version.php` file. Ensure this file is appropriately configured to maintain compatibility and version tracking.

### Getting Started

To effectively use and customize this child theme:

- Update `config.php` with your specific settings.
- Manage custom fonts in the `fonts` directory.
- Review and update language strings in the `lang` directory as needed.
- Validate and synchronize the `layout` directory with each parent theme update.
- Customize styles in the `style` directory to match your Moodle instance's aesthetic.
- Adjust templates in the `templates` directory for a tailored user experience.

### Important Note

Keep the child theme up-to-date with changes in the parent theme to ensure compatibility and access to the latest features.

For detailed instructions on theme customization and best practices, refer to the documentation provided by Moodle.

---
