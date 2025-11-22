import Button from '@/components/ui/Button';

export default function PartnersPage() {
  return (
    <div className="py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Partner with Artixcore
          </h1>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Join our partner network and unlock new opportunities for growth and collaboration
          </p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
          <div className="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8">
            <h2 className="text-2xl font-bold text-gray-900 mb-4">Partner Network</h2>
            <p className="text-gray-600 mb-6">
              Connect with a global network of partners and leverage our platform to deliver
              exceptional value to your customers.
            </p>
            <Button href="/partners/join" variant="primary">
              Join Now
            </Button>
          </div>
          <div className="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-8">
            <h2 className="text-2xl font-bold text-gray-900 mb-4">Partner Benefits</h2>
            <ul className="text-gray-600 space-y-2 mb-6">
              <li>• Access to comprehensive resources and tools</li>
              <li>• Dedicated partner support team</li>
              <li>• Marketing and sales enablement</li>
              <li>• Competitive partner program benefits</li>
            </ul>
            <Button href="/partners/login" variant="outline">
              Partner Login
            </Button>
          </div>
        </div>
      </div>
    </div>
  );
}

