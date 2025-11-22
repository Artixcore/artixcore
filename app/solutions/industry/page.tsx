import Button from '@/components/ui/Button';

const industries = [
  { name: 'Healthcare', description: 'Solutions tailored for healthcare organizations' },
  { name: 'Finance', description: 'Financial services and banking solutions' },
  { name: 'Retail', description: 'Retail and e-commerce solutions' },
  { name: 'Technology', description: 'Tech industry specific solutions' },
  { name: 'Education', description: 'Educational platform solutions' },
];

export default function IndustrySolutionsPage() {
  return (
    <div className="py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Solutions by Industry
          </h1>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Tailored solutions for your specific industry needs
          </p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {industries.map((industry) => (
            <div
              key={industry.name}
              className="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-shadow"
            >
              <h3 className="text-xl font-bold text-gray-900 mb-2">{industry.name}</h3>
              <p className="text-gray-600 mb-4">{industry.description}</p>
              <Button href={`/solutions/industry/${industry.name.toLowerCase()}`} variant="outline" size="sm">
                Learn More →
              </Button>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

