# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 12 application with a Vue 3 + TypeScript frontend using Inertia.js, built as a starter kit with authentication scaffolding and modern UI components.

### Tech Stack
- **Backend**: Laravel 12, PHP 8.2+
- **Frontend**: Vue 3 + TypeScript, Inertia.js
- **UI**: Tailwind CSS v4, Reka UI, Lucide icons, shadcn/vue components
- **Build**: Vite with Wayfinder plugin for Laravel route helpers
- **Testing**: Pest (PHP), configured for Unit and Feature tests

## Development Commands

### PHP/Laravel
```bash
# Development environment (concurrently runs server, queue, logs, vite)
composer dev

# Development with SSR support
composer dev:ssr

# Run tests
composer test
# Or directly: php artisan test

# Code formatting
./vendor/bin/pint

# Individual services
php artisan serve
php artisan queue:listen --tries=1
php artisan pail --timeout=0
```

### Frontend
```bash
# Development server
npm run dev

# Build for production
npm run build

# Build with SSR
npm run build:ssr

# Code quality
npm run lint      # ESLint with --fix
npm run format    # Prettier write
npm run format:check # Prettier check only
```

### Testing
- Use `php artisan test` for all tests
- Tests are in `tests/Feature/` and `tests/Unit/`
- Uses Pest testing framework
- Single test: `php artisan test --filter TestName`

## Architecture

### Backend Structure
- **Routes**: Split across `routes/web.php`, `routes/auth.php`, `routes/settings.php`
- **Controllers**: Organized by feature (Auth, Settings) in `app/Http/Controllers/`
- **Middleware**: Custom middleware for Inertia and appearance handling
- **Models**: Standard Laravel Eloquent models in `app/Models/`

### Frontend Structure
- **Pages**: Vue SFCs in `resources/js/pages/` (maps to Inertia routes)
- **Components**: Reusable components in `resources/js/components/`
- **Layouts**: Page layouts in `resources/js/layouts/` with auth and app variants
- **UI Components**: shadcn/vue components in `resources/js/components/ui/`
- **Composables**: Vue composables in `resources/js/composables/`
- **Types**: TypeScript definitions in `resources/js/types/`

### Key Features
- **Authentication**: Complete auth scaffolding with email verification
- **Settings**: User profile and password management
- **Appearance**: Light/dark theme system via `useAppearance` composable
- **UI System**: Pre-configured shadcn/vue components with consistent theming
- **SSR Support**: Optional server-side rendering capability

### Route Organization
- Public routes in `routes/web.php`
- Auth routes (login, register, etc.) in `routes/auth.php`  
- User settings routes in `routes/settings.php`
- All routes use Inertia to render Vue components

### Component Architecture
- **App Shell**: `AppShell.vue` provides main layout structure
- **Layouts**: Contextual layouts (AuthLayout, AppLayout, settings Layout)
- **UI Library**: Consistent component system using Reka UI primitives
- **Icons**: Lucide Vue Next for iconography

## Configuration Notes
- Uses Laravel Wayfinder for type-safe route helpers in Vue
- Tailwind CSS v4 with custom design tokens
- Components configured via `components.json` for shadcn/vue integration
- Vite handles asset compilation with HMR and SSR support