import Button from '@/components/ui/Button';

const useCases = [
  { name: 'Data Analytics', description: 'Transform data into actionable insights' },
  { name: 'Process Automation', description: 'Automate repetitive tasks and workflows' },
  { name: 'Security & Compliance', description: 'Ensure security and regulatory compliance' },
  { name: 'Customer Engagement', description: 'Enhance customer experience and engagement' },
];

export default function UseCaseSolutionsPage() {
  return (
    <div className="py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Solutions by Use Case
          </h1>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Solutions designed for specific business challenges and opportunities
          </p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          {useCases.map((useCase) => (
            <div
              key={useCase.name}
              className="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 hover:shadow-lg transition-shadow"
            >
              <h3 className="text-xl font-bold text-gray-900 mb-2">{useCase.name}</h3>
              <p className="text-gray-600 mb-4">{useCase.description}</p>
              <Button href={`/solutions/use-case/${useCase.name.toLowerCase().replace(' ', '-')}`} variant="outline" size="sm">
                Explore →
              </Button>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

