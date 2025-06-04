<p align="center">
    <a href="https://www.codehunger.in" target="_blank">
        <img src="https://www.codehunger.in/assets/image/logo.png" alt="CodeHunger Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/twilio/sdk">
        <img src="https://img.shields.io/packagist/dt/twilio/sdk" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/twilio/sdk">
        <img src="https://img.shields.io/packagist/v/twilio/sdk" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/twilio/sdk">
        <img src="https://img.shields.io/packagist/l/twilio/sdk" alt="License">
    </a>
</p>

# Send SMS Using Twilio API in Laravel 12 Without Any Package (Tested with CURL)

This repository provides a clean example of integrating **Twilio SMS API** in Laravel **without using any third-party package or SDK**. It uses raw CURL requests to interact with Twilio's REST API, giving you full control over request construction and debugging.

---

## ✅ Features

- Send SMS using Twilio REST API
- No SDK or external packages required
- CURL-based HTTP request implementation
- Simple controller structure for easy use
- `.env` support for sensitive credentials
- Compatible with Laravel 9, 10, and 12

---

## 📖 Blog Tutorial

For the full step-by-step guide, visit our blog post:

👉 [Twilio Integration in Laravel 12 – Step-by-Step Guide with Example](https://www.codehunger.in/blog/twilio-integration-in-laravel-12-step-by-step-guide-with-example)

---

## 🧾 Folder Structure

- `routes/web.php` — defines the route for sending SMS  
- `app/Http/Controllers/TwilioController.php` — contains the CURL-based logic  
- `.env` — holds your Twilio SID and Auth Token securely  

---

## ⚙️ .env Configuration

Add your Twilio credentials to your `.env` file:

```env
ACCOUNT_SID=your_twilio_account_sid
AUTH_TOKEN=your_twilio_auth_token
