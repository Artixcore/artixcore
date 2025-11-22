import Button from '@/components/ui/Button';

const roles = [
  { name: 'Information Security', description: 'Tools for security professionals' },
  { name: 'Corporate Security', description: 'Solutions for corporate security teams' },
  { name: 'Marketing', description: 'Marketing and brand protection tools' },
  { name: 'IT Operations', description: 'IT operations and management solutions' },
];

export default function RoleSolutionsPage() {
  return (
    <div className="py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Solutions by Role
          </h1>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Tools and features optimized for different roles and responsibilities
          </p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          {roles.map((role) => (
            <div
              key={role.name}
              className="bg-white rounded-xl shadow-sm border border-gray-200 p-8 hover:shadow-lg transition-shadow"
            >
              <h3 className="text-xl font-bold text-gray-900 mb-2">{role.name}</h3>
              <p className="text-gray-600 mb-4">{role.description}</p>
              <Button href={`/solutions/role/${role.name.toLowerCase().replace(' ', '-')}`} variant="outline" size="sm">
                Learn More →
              </Button>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

