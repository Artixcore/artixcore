import Button from '@/components/ui/Button';
import ProductCard from '@/components/ui/ProductCard';
import { generatePageMetadata } from '@/lib/metadata';
import type { Metadata } from 'next';

export const metadata: Metadata = generatePageMetadata({
  title: 'Our Products',
  description: 'Discover our comprehensive suite of products designed to meet your business needs. From core platforms to enterprise solutions.',
  path: '/products',
  keywords: ['products', 'enterprise solutions', 'business software', 'platform'],
});

const products = [
  {
    title: 'Core Platform',
    description: 'Comprehensive solution for enterprise needs with advanced analytics and automation capabilities.',
    href: '/products/core',
    badge: 'Popular',
  },
  {
    title: 'Enterprise Suite',
    description: 'Scalable platform designed for large organizations with custom integrations and dedicated support.',
    href: '/products/enterprise',
  },
  {
    title: 'Analytics Dashboard',
    description: 'Real-time insights and reporting tools to make data-driven decisions with confidence.',
    href: '/products/analytics',
  },
];

export default function ProductsPage() {
  return (
    <div className="py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Our Products
          </h1>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Discover our comprehensive suite of products designed to meet your business needs
          </p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
          {products.map((product) => (
            <ProductCard
              key={product.title}
              title={product.title}
              description={product.description}
              href={product.href}
              badge={product.badge}
            />
          ))}
        </div>
        <div className="text-center">
          <Button href="/demo" variant="primary" size="lg">
            Request a Demo
          </Button>
        </div>
      </div>
    </div>
  );
}

