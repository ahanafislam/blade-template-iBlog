# ✅ Laravel Blade Template Conversion

## 📌 What’s Included

### 1. Setup & Layout
- Established a New Laravel Project.
- Developed a base layout file (`layout.blade.php`) utilizing `@yield`, `@section`, and `@extends`.

### 2. Reusable Blade Components
- Created header, navigation, and footer components within the components directory. Folder Structure: Displayed below,
- `components/header.blade.php`
- `components/navbar.blade.php`
- `components/footer.blade.php`

- Employed `@include` for recurring UI elements.

### 3. Page Conversion
- Create SignUp Button
- Create /login Route `views/login.blade.php`
- Establish /registration route and transfer the registration form along with associated content into this view `views/register.blade.php`, extending the base layout.

### 4. Styling & Assets
- Relocated the custom css and js folder to Laravel’s public directory
- Linked using `{{ asset() }}` helper.
- Confirmed that Tailwind and FontAwesome are loaded appropriately.
Submission process

---

## 💡 Blade Features Utilized
- `@extends`, `@yield`, `@section` for layout inheritance.
- `@include` and custom components for modular UI.
- `@csrf` directive for secure form submission.
- `asset()` helper for linking static assets.

---

## 🚀 How to Execute

```bash
# Install dependencies
composer install

# Serve the application
php artisan serve
```
