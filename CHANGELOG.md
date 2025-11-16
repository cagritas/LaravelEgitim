# Changelog

All notable changes to this project are documented here. Dates follow the commit timestamps recorded in `git log`.

## [Unreleased]
- No unreleased changes yet.

## [0.9.0] - 2025-11-16
### Added
- `Notes.md` and `NotesTR.md` that consolidate every lesson, artisan command, and trick into English and Turkish study guides for the future GitHub Wiki.

## [0.8.0] - 2025-11-16
### Added
- `resources/views/layouts/site.blade.php` plus `partials/navigation` and `partials/footer` to provide a reusable, modern marketing layout.
- A dedicated `/web` landing experience rendered via `resources/views/pages/home.blade.php`, populated by `WebPageController::showLandingPage()`.
### Changed
- `WebPageController` now renders `pages.home` and the `welcome` hub links into the revamped marketing page.
- Legacy `resources/views/web.blade.php` markup was replaced with layout-driven sections to better mirror a GitHub Wiki showcase.

## [0.7.0] - 2025-11-16
### Changed
- Rebuilt `resources/views/welcome.blade.php` into an English “playground hub” with cards that surface every sample flow alongside descriptive CTAs.

## [0.6.1] - 2025-11-16
### Fixed
- Renamed the `2025_11_16_071936_iletisim.php` migration class to `Iletisim` so Artisan can auto-discover and run it.

## [0.6.0] - 2025-11-16
### Added
- `RegisterUser` controller, GET/POST `/register` routes, and `resources/views/register.blade.php` showcasing validation errors and success flashes.
- Migration `2025_11_16_115134_user.php` that scaffolds a demo `user` table (name, unique email, password, timestamps) for the registration example.

## [0.5.1] - 2025-11-16
### Added
- Documentation comments in `routes/web.php` highlighting where the image upload flow lives for easier onboarding.

## [0.5.0] - 2025-11-16
### Added
- `UploadImage` controller with an image validator, storage call, and gallery listing action.
- Blade templates `resources/views/upload.blade.php` and `resources/views/list_images.blade.php` plus `/upload` (GET/POST) and `/images` (GET) routes.

## [0.4.0] - 2025-11-16
### Added
- Contact request module: controller, model, migration, Blade view, and flash-messaging form UX under `/contact`.
- Initial changelog entry noting the contact workflow so future readers understand the feature set.

## [0.3.1] - 2025-11-16
### Changed
- Set `Schema::defaultStringLength(191)` inside `AppServiceProvider` to avoid legacy MySQL index length errors.

## [0.3.0] - 2025-11-16
### Added
- New English-first controllers (`ExampleController`, `FormController`, `DatabaseOperationsController`, `ModelOperationsController`, `WebPageController`) plus middleware `FormSubmissionGuard`.
- `InformationEntry` model and `2025_11_11_174330_create_information_entries_table.php` migration to back query-builder and Eloquent demos.
- Blade templates (`example.blade.php`, `form.blade.php`) rewritten in English, along with the guarded form route.
### Changed
- `routes/web.php` reorganized to register named routes, middleware usage, and `/test/{name}` examples with the new controllers.
- `resources/views/web.blade.php` and other sample pages localized to English copy and modernized markup.
### Removed
- Legacy Turkish controllers/models (`Ornek`, `FormIslemleri`, `Veritabaniislemleri`, `WebPage`, `Modelislemler`, `Bilgiler`) and their older migrations in favor of the new structure.

## [0.2.0] - 2025-11-13
### Added
- `Modelislemler` controller plus the `Bilgiler` Eloquent model, demonstrating list/add/update/delete helpers.
- Routes `/modellist`, `/modelekle`, `/modelguncelle`, and `/modelsil` to exercise those helpers directly from the browser.

## [0.1.0] - 2025-11-13
### Added
- Initial Laravel installation, environment examples, default routes, tests, and asset pipeline committed as the base for future lessons.

