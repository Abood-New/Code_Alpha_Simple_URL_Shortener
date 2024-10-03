# Simple URL Shortener API

## Overview

This project is an API to shorten a given URL.

## API Endpoints

### 1. **Shorten A Given URL**

- **Endpoint**: `/shorten`
- **Method**: `POST`
- **Description**: Creates a short code for the given URL and returns the short URL.
- **Request Body**:
  - `orginal_url`: The URL you want to shorten.
  
### 2. **Redirect To The Orginal URL**

- **Endpoint**: `/{short_code}`
- **Method**: `GET`
- **Description**: It redirects you to the orginal link.


