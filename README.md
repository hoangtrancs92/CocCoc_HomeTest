# Amazon Shipping Fee Calculator

## Developer Information
- **Name**: Tran Huu Hoang  
- **Role**: Full Stack Web Developer  
- **Email**: hoangtran.working@gmail.com  
- **Phone**: 0817765357  
- **LinkedIn**: [www.linkedin.com/in/tranhoang-working](https://www.linkedin.com/in/tranhoang-working)  

## Project Overview
This project is a simple PHP-based application designed to calculate the gross price of an order for a shipping service that helps Vietnamese customers buy products from Amazon. It processes product details (price, weight, dimensions) provided via Amazon URLs and computes shipping fees and totals based on configurable coefficients.

### Key Features
- Use PHP 7.4.33 (cli)
- No frameworks used, pure PHP implementation for clean architecture.
- Manual unit tests for all classes (not use PHPUnit).

### How to Run
1. Ensure Composer is installed and run `composer dump-autoload` to set up PSR-4 autoloading.
2. Execute the main script: `php index.php` to see a sample order calculation.
3. Run tests individually: `php tests/<TestFile>.php` (e.g., `php tests/Services/OrderServiceTest.php`).

## Future Development
- **Validation**: Implement data validation to ensure:
