# Laravel Text Processor

## 🚀 Features

- Process text using multiple operations in a single request.
- Supported operations:
  - Reverse text
  - Convert text to uppercase
  - Remove spaces from text

## 🛠 Tech Stack

- **Laravel 12.2**
- **PHP 8.2**
- **Docker & Docker Compose**

## 🎯 Getting Started

### 📌 Prerequisites

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

### 🚧 Installation

Clone the repository:

```bash
git clone git@github.com:huang63261/laravel-text-processor.git
cd laravel-text-processor
```

Run Docker containers:

```bash
docker-compose up -d --build
```

### 🌐 API Endpoint

#### `POST /api/text/process`

Request example:

```json
{
  "text": "Hello World",
  "operations": ["reverse", "uppercase", "remove_spaces"]
}
```

Response example:

```json
{
  "original_text": "Hello World",
  "processed_text": "DLROWOLLEH"
}
```
