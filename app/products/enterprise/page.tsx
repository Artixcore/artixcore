import Button from '@/components/ui/Button';

export default function EnterpriseProductPage() {
  return (
    <div className="py-20">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          Enterprise Suite
        </h1>
        <div className="prose prose-lg max-w-none mb-8">
          <p className="text-xl text-gray-600 mb-4">
            Scalable platform designed for large organizations with custom integrations and dedicated support.
          </p>
          <h2 className="text-2xl font-bold text-gray-900 mt-8 mb-4">Enterprise Features</h2>
          <ul className="text-gray-600 space-y-2">
            <li>• Custom integrations</li>
            <li>• Dedicated support team</li>
            <li>• Advanced customization options</li>
            <li>• Priority support</li>
            <li>• SLA guarantees</li>
          </ul>
        </div>
        <Button href="/demo" variant="primary" size="lg">
          Contact Sales
        </Button>
      </div>
    </div>
  );
}

