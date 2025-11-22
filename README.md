# Artixcore Website

A modern, professional website for Artixcore built with Next.js, TypeScript, and Tailwind CSS. Inspired by industry-leading design patterns and best practices.

## Features

- **Modern UI/UX**: Clean, professional design with smooth animations and transitions
- **Responsive Design**: Mobile-first approach with full support for tablets and desktops
- **Multi-level Navigation**: Comprehensive navigation with dropdown menus
- **Component-based Architecture**: Reusable components for maintainability
- **TypeScript**: Full type safety throughout the application
- **SEO Optimized**: Proper metadata and semantic HTML structure
- **Accessibility**: Built with accessibility best practices in mind

## Tech Stack

- **Framework**: Next.js 16 (App Router)
- **Language**: TypeScript
- **Styling**: Tailwind CSS 4
- **Fonts**: Geist Sans & Geist Mono

## Project Structure

```
artixcore-1/
├── app/                    # Next.js app directory
│   ├── layout.tsx         # Root layout
│   ├── page.tsx           # Homepage
│   ├── products/          # Products pages
│   ├── solutions/         # Solutions pages
│   ├── resources/         # Resources pages
│   ├── company/           # Company pages
│   └── partners/          # Partners pages
├── components/            # React components
│   ├── ui/               # UI components (Button, ProductCard)
│   └── layout/            # Layout components (Header, Footer, Hero)
├── lib/                   # Utility functions
├── types/                 # TypeScript type definitions
└── public/                # Static assets
```

## Getting Started

### Prerequisites

- Node.js 18+ 
- npm or yarn

### Installation

1. Install dependencies:
```bash
npm install
```

2. Run the development server:
```bash
npm run dev
```

3. Open [http://localhost:3000](http://localhost:3000) in your browser

### Build for Production

```bash
npm run build
npm start
```

## Key Components

### Layout Components
- **Header**: Sticky navigation with dropdown menus and mobile menu
- **Footer**: Comprehensive footer with links and social media
- **Hero**: Hero section component with customizable CTAs
- **Layout**: Main layout wrapper component

### UI Components
- **Button**: Reusable button component with multiple variants
- **ProductCard**: Card component for displaying products

## Pages

- **Homepage** (`/`): Main landing page with hero, products, solutions, and blog sections
- **Products** (`/products`): Product listing page
- **Solutions** (`/solutions`): Solutions overview page
- **Resources/Blog** (`/resources/blog`): Blog listing page
- **Company/About** (`/company/about`): About page
- **Partners** (`/partners`): Partners page
- **Demo** (`/demo`): Demo request form
- **Login** (`/login`): Login page

## Customization

### Colors
The color scheme can be customized in Tailwind CSS classes throughout the components. Primary color is blue (`blue-600`), with indigo accents.

### Content
Update content by editing the respective page components in the `app/` directory.

### Navigation
Modify navigation items in `components/layout/Header.tsx`.

## Development

### Linting
```bash
npm run lint
```

### Type Checking
TypeScript will automatically check types during development and build.

## License

© 2025 Artixcore. All rights reserved.
