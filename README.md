# Kanboard Skeleton Plugin

> **Important:** This is a development template, not an installable Kanboard
> plugin. Rename its placeholders, remove unused examples and run the supplied
> checks before publishing a generated plugin.

Kanboard Skeleton Plugin provides a safe starting structure for a Kanboard
plugin. Its working example connects plugin metadata, a controller, route,
template, helper, translation, SVG and responsive theme-aware styling.

## What is included

- **`Plugin.php`:** registers metadata and only examples with working files.
- **`Controller/`:** demonstrates a settings-page controller.
- **`Helper/`:** demonstrates an SVG helper with missing-file handling.
- **`Template/`:** contains a working view and author guidance.
- **`Assets/`:** provides scoped CSS, optional JavaScript and an example SVG.
- **`Locale/`:** provides British English and a copy-ready locale map.
- **`tests/`:** runs dependency-free checks against a real Kanboard checkout.
- **`.github/workflows/`:** checks code quality and PHP compatibility.

## Start a plugin

1. Create a new repository from this template using your Git provider's
   template function.
2. Choose the final, case-sensitive plugin directory name before writing code.
3. Replace every placeholder listed below across filenames and file contents.
4. Remove examples that the plugin will not use, including their registrations
   and tests.
5. Replace the example settings page with the finished user-facing interface.
6. Run the focused checks before opening a pull request or creating a release.

### Required replacements

- **`PluginNameExampleStudlyCaps`:** namespace, directory and plugin name;
  for example, `TaskTimer`.
- **`pluginNameExampleStudlyCaps`:** template namespace; for example,
  `taskTimer`.
- **`plugin-name`:** lowercase asset prefix; for example, `task-timer`.
- **`Plugin Author`:** public author or organisation name.
- **`https://example.com/plugin-homepage`:** canonical repository or
  documentation URL.

On PowerShell, review remaining placeholders with:

```powershell
$placeholders = @(
    'PluginNameExampleStudlyCaps',
    'pluginNameExampleStudlyCaps',
    'plugin-name',
    'Plugin Author',
    'example.com/plugin-homepage'
) -join '|'
rg -n $placeholders
```

## Safe defaults

- The included route points to a real controller action and view.
- Core template overrides and optional hooks are commented out until their
  replacement templates exist.
- CSS is scoped beneath `.plugin-name-example` to protect Kanboard and other
  plugins.
- JavaScript is not loaded by default.
- The SVG helper accepts only simple plugin-owned filenames and returns an empty
  string when an icon is unavailable.
- There are no database changes in the starter template.

## Repository map

```text
KanboardSkeletonPlugin/
|-- Assets/
|   |-- css/plugin-name.css
|   |-- icons/example.svg
|   `-- js/plugin-name.js
|-- Controller/MyController.php
|-- Helper/MyHelper.php
|-- Locale/
|   |-- en_GB/translations.php
|   `-- translations-starter-template.php
|-- Template/
|   |-- settings/show.php
|   `-- README.md
|-- tests/
|   |-- HelperTest.php
|   |-- PluginCompatibilityTest.php
|   |-- TemplateCompatibilityTest.php
|   |-- TestAssertions.php
|   `-- run.php
|-- INSTALL.md
|-- Plugin.php
`-- README.md
```

## Compatibility and checks

- Kanboard `1.2.54` or later.
- PHP `8.2`, `8.3`, `8.4` and `8.5`.
- No database is required by the example plugin.

Run the focused checks against a Kanboard checkout:

```powershell
php tests/run.php C:\path\to\kanboard
```

Also run PHP syntax checks, PHPCS, Stylelint, Markdownlint and Actionlint when
those tools are available. The supplied workflows perform the release-facing
matrix checks after the generated repository is pushed.

## Authoring guidance

### Templates and routes

- Register a route only when its controller action and template both exist.
- Keep template identifiers camelCase and plugin namespaces StudlyCaps.
- Escape variable text with Kanboard's `e()` helper.
- Add focused regression coverage before overriding a Kanboard core template.

### Translations

- Copy `Locale/translations-starter-template.php` to
  `Locale/<language_code>/translations.php`.
- Keep source keys identical to strings passed to `t()`.
- Translate values rather than creating duplicate empty keys.

### Styling and scripts

- Scope selectors beneath a unique plugin root.
- Support light, dark, forced-colour and reduced-motion preferences.
- Keep interactive targets usable on narrow and touch-based screens.
- Load JavaScript only when native HTML and CSS cannot provide the behaviour.

### Links and privacy

- Add `rel="noopener noreferrer"` whenever a generated template opens an
  external link in a new tab.
- Do not include credentials, tokens, private endpoints or customer data in a
  plugin repository, fixture, screenshot or release archive.

## Before publishing

- [ ] All placeholders have been replaced.
- [ ] Unused examples and registrations have been removed.
- [ ] User-facing text is translated and understandable.
- [ ] Light, dark, mobile, keyboard and reduced-motion behaviour is checked.
- [ ] The focused regression suite passes on the supported Kanboard baseline.
- [ ] The declared compatibility matches the versions exercised by CI.
- [ ] The README, installation guide and changelog describe the finished plugin.
- [ ] The release archive contains the exact case-sensitive plugin directory.

The initial test contribution was provided through pull request #5 by
[@lastlink](https://github.com/lastlink). It is retained as part of the
production-ready test structure.

## License

This template is distributed under the [MIT License](LICENSE).
