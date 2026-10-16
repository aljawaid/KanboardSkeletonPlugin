# Using the Kanboard plugin template

> **Do not install this skeleton unchanged.** It contains deliberately obvious
> placeholder identifiers that must be replaced before the generated plugin is
> enabled for users.

## Create the repository

1. Select **Use this template** on the repository page.
2. Create the generated repository under the intended owner or organisation.
3. Clone the generated repository to a development workstation.
4. Choose the final plugin directory name. It must match the namespace and the
   value returned by `Plugin::getPluginName()` exactly, including case.

## Prepare the plugin

1. Replace all documented placeholders from [README.md](README.md).
2. Rename `plugin-name.css` and `plugin-name.js` to the plugin's lowercase asset
   prefix, then update their registrations in `Plugin.php`.
3. Replace or remove the example route, controller, helper and settings view.
4. Add translated values for every user-facing source string.
5. Update the focused tests with the generated plugin's name and metadata.
6. Remove template-only guidance that should not appear in the finished plugin.

## Validate before installation

- Run `php tests/run.php <kanboard-root>` against the supported Kanboard version.
- Confirm PHP syntax, PHPCS, CSS, Markdown, YAML and workflow checks pass.
- Open every registered route, hook and overridden template in Kanboard.
- Check narrow mobile widths, keyboard navigation, light and dark appearance,
  forced colours and reduced motion.
- Confirm the release archive expands directly to the exact plugin directory.

## Install the generated plugin

Copy the completed plugin directory into Kanboard's `plugins` directory:

```text
kanboard/
`-- plugins/
    `-- ExactPluginName/
        |-- Plugin.php
        |-- Assets/
        |-- Controller/
        |-- Helper/
        |-- Locale/
        `-- Template/
```

The generated plugin's own README should state whether it is installed through
Kanboard's Plugin Directory, a release archive or Git. Do not publish those
instructions until the package and directory name have been verified.
