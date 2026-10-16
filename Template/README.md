# Template directory

Kanboard resolves plugin views from this directory.

- Group related views in lowercase directories such as `settings/`.
- Use lowercase filenames such as `show.php`.
- Escape variable text with Kanboard's `e()` helper before rendering it.
- Render only trusted, plugin-owned SVG markup without escaping.
- Keep each registered hook, route or override paired with an existing view.
- Add a focused test whenever a core template is overridden.

The included `settings/show.php` view is a working example and can be removed
after its route and controller action are removed from the generated plugin.
