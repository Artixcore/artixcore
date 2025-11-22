import Button from '@/components/ui/Button';

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

export default function SolutionsPage() {
  return (
    <div className="py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Solutions Tailored to Your Needs
          </h1>
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
    </div>
  );
}

