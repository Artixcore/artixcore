import Button from '@/components/ui/Button';
import { generatePageMetadata } from '@/lib/metadata';
import type { Metadata } from 'next';

export const metadata: Metadata = generatePageMetadata({
  title: 'Core Platform',
  description: 'Comprehensive solution for enterprise needs with advanced analytics and automation capabilities.',
  path: '/products/core',
  keywords: ['core platform', 'enterprise solutions', 'analytics', 'automation'],
});

export default function CoreProductPage() {
  return (
    <div className="py-20">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          Core Platform
        </h1>
        <div className="prose prose-lg max-w-none mb-8">
          <p className="text-xl text-gray-600 mb-4">
            Comprehensive solution for enterprise needs with advanced analytics and automation capabilities.
          </p>
          <h2 className="text-2xl font-bold text-gray-900 mt-8 mb-4">Key Features</h2>
          <ul className="text-gray-600 space-y-2">
            <li>• Advanced analytics and reporting</li>
            <li>• Automation capabilities</li>
            <li>• Enterprise-grade security</li>
            <li>• Scalable infrastructure</li>
            <li>• 24/7 support</li>
          </ul>
        </div>
        <Button href="/demo" variant="primary" size="lg">
          Request a Demo
        </Button>
      </div>
    </div>
  );
}

