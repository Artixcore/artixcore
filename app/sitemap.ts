import { MetadataRoute } from 'next';

const siteUrl = process.env.NEXT_PUBLIC_SITE_URL || 'https://artixcore.com';

export default function sitemap(): MetadataRoute.Sitemap {
  const routes = [
    '',
    '/products',
    '/products/core',
    '/products/enterprise',
    '/solutions',
    '/solutions/industry',
    '/solutions/use-case',
    '/solutions/role',
    '/resources/blog',
    '/company/about',
    '/partners',
    '/demo',
    '/login',
  ];

  return routes.map((route) => ({
    url: `${siteUrl}${route}`,
    lastModified: new Date(),
    changeFrequency: route === '' ? 'daily' : 'weekly',
    priority: route === '' ? 1.0 : route.startsWith('/products') || route.startsWith('/solutions') ? 0.9 : 0.7,
  }));
}

