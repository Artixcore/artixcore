import Image from 'next/image';
import Link from 'next/link';
import Button from './Button';

interface ProductCardProps {
  title: string;
  description: string;
  image?: string;
  href: string;
  badge?: string;
}

export default function ProductCard({
  title,
  description,
  image,
  href,
  badge,
}: ProductCardProps) {
  return (
    <div className="group relative bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
      {badge && (
        <span className="absolute top-4 right-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full z-10">
          {badge}
        </span>
      )}
      {image && (
        <div className="relative h-48 bg-gradient-to-br from-blue-50 to-indigo-100 overflow-hidden">
          <Image
            src={image}
            alt={title}
            fill
            className="object-cover group-hover:scale-105 transition-transform duration-300"
          />
        </div>
      )}
      <div className="p-6">
        <h3 className="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">
          {title}
        </h3>
        <p className="text-gray-600 mb-4 line-clamp-3">{description}</p>
        <Button href={href} variant="outline" size="sm">
          Learn More →
        </Button>
      </div>
    </div>
  );
}

