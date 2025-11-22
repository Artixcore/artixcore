import Hero from '@/components/layout/Hero';
import ProductCard from '@/components/ui/ProductCard';
import Button from '@/components/ui/Button';

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
  {
    title: 'Integration Hub',
    description: 'Seamlessly connect with your existing tools and workflows through our extensive API.',
    href: '/products/integrations',
  },
  {
    title: 'Security & Compliance',
    description: 'Enterprise-grade security features and compliance tools to protect your data.',
    href: '/products/security',
  },
  {
    title: 'Developer Tools',
    description: 'Powerful SDKs and developer resources to build custom solutions on our platform.',
    href: '/products/developer',
  },
];

const solutions = [
  {
    title: 'By Industry',
    description: 'Tailored solutions for healthcare, finance, retail, and more.',
    href: '/solutions/industry',
  },
  {
    title: 'By Use Case',
    description: 'Solutions designed for specific business challenges and opportunities.',
    href: '/solutions/use-case',
  },
  {
    title: 'By Role',
    description: 'Tools and features optimized for different roles and responsibilities.',
    href: '/solutions/role',
  },
];

const trustIndicators = [
  { label: 'Fortune 500 Companies', value: '500+' },
  { label: 'Global Enterprises', value: '10K+' },
  { label: 'Countries Served', value: '50+' },
  { label: 'Uptime SLA', value: '99.9%' },
];

export default function Home() {
  return (
    <>
      {/* Hero Section */}
      <Hero
        title="World's Leading Intelligence-Driven Platform"
        subtitle="Trusted by Industry Leaders"
        description="Empower your organization with intelligent solutions, cutting-edge technology, and unparalleled support. Transform your business with our comprehensive platform."
        primaryCTA={{ label: 'Request Demo', href: '/demo' }}
        secondaryCTA={{ label: 'Learn More', href: '/products' }}
      />

      {/* Trust Indicators */}
      <section className="py-12 bg-white border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
            {trustIndicators.map((indicator) => (
              <div key={indicator.label} className="text-center">
                <div className="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                  {indicator.value}
                </div>
                <div className="text-sm text-gray-600">{indicator.label}</div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Products Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
              Our Products & Solutions
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Discover our comprehensive suite of products designed to meet your business needs
            </p>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
        </div>
      </section>

      {/* Solutions Overview */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
              Solutions Tailored to Your Needs
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Explore solutions designed for your industry, use case, or role
            </p>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {solutions.map((solution) => (
              <div
                key={solution.title}
                className="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 hover:shadow-lg transition-shadow"
              >
                <h3 className="text-xl font-bold text-gray-900 mb-3">{solution.title}</h3>
                <p className="text-gray-600 mb-4">{solution.description}</p>
                <Button href={solution.href} variant="outline" size="sm">
                  Explore →
                </Button>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-blue-600 to-indigo-600">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl md:text-4xl font-bold text-white mb-4">
            Ready to Transform Your Business?
          </h2>
          <p className="text-xl text-blue-100 mb-8">
            Join thousands of organizations already using Artixcore to drive innovation and growth.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button href="/demo" variant="secondary" size="lg" className="bg-white text-blue-600 hover:bg-gray-100">
              Schedule a Demo
            </Button>
            <Button href="/contact" variant="outline" size="lg" className="border-white text-white hover:bg-white/10">
              Contact Sales
            </Button>
          </div>
        </div>
      </section>

      {/* Latest News/Blog Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between items-center mb-12">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Latest Insights
              </h2>
              <p className="text-xl text-gray-600">
                Stay updated with our latest research and insights
              </p>
            </div>
            <Button href="/resources/blog" variant="outline">
              View All →
            </Button>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
            {[1, 2, 3].map((i) => (
              <article
                key={i}
                className="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow"
              >
                <div className="h-48 bg-gradient-to-br from-blue-100 to-indigo-100"></div>
                <div className="p-6">
                  <div className="text-sm text-gray-500 mb-2">November {20 + i}, 2025</div>
                  <h3 className="text-xl font-bold text-gray-900 mb-2">
                    Latest Industry Trends and Insights
                  </h3>
                  <p className="text-gray-600 mb-4">
                    Discover the latest trends shaping the industry and how they impact your business.
                  </p>
                  <Button href={`/resources/blog/post-${i}`} variant="outline" size="sm">
                    Read More →
                  </Button>
                </div>
              </article>
            ))}
          </div>
        </div>
      </section>

      {/* Newsletter Signup */}
      <section className="py-16 bg-white border-y border-gray-200">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
            Get the Latest Updates
          </h2>
          <p className="text-lg text-gray-600 mb-8">
            Subscribe to our newsletter for the latest insights, product updates, and industry news.
          </p>
          <form className="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input
              type="email"
              placeholder="Enter your email"
              className="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            />
            <Button type="submit" variant="primary" size="md">
              Subscribe
            </Button>
          </form>
        </div>
      </section>
    </>
  );
}
