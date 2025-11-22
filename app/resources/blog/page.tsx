import Button from '@/components/ui/Button';

const blogPosts = [
  {
    id: 1,
    title: 'Latest Industry Trends and Insights',
    date: 'November 21, 2025',
    excerpt: 'Discover the latest trends shaping the industry and how they impact your business.',
  },
  {
    id: 2,
    title: 'Best Practices for Enterprise Implementation',
    date: 'November 20, 2025',
    excerpt: 'Learn how leading organizations are implementing solutions to drive innovation.',
  },
  {
    id: 3,
    title: 'Security and Compliance Updates',
    date: 'November 19, 2025',
    excerpt: 'Stay informed about the latest security updates and compliance requirements.',
  },
];

export default function BlogPage() {
  return (
    <div className="py-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Blog & Insights
          </h1>
          <p className="text-xl text-gray-600">
            Stay updated with our latest research and insights
          </p>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {blogPosts.map((post) => (
            <article
              key={post.id}
              className="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow"
            >
              <div className="h-48 bg-gradient-to-br from-blue-100 to-indigo-100"></div>
              <div className="p-6">
                <div className="text-sm text-gray-500 mb-2">{post.date}</div>
                <h3 className="text-xl font-bold text-gray-900 mb-2">{post.title}</h3>
                <p className="text-gray-600 mb-4">{post.excerpt}</p>
                <Button href={`/resources/blog/post-${post.id}`} variant="outline" size="sm">
                  Read More →
                </Button>
              </div>
            </article>
          ))}
        </div>
      </div>
    </div>
  );
}

