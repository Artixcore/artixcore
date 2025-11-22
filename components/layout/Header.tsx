'use client';

import { useState } from 'react';
import Link from 'next/link';
import Button from '../ui/Button';

interface NavItem {
  label: string;
  href?: string;
  children?: NavItem[];
}

const navigation: NavItem[] = [
  {
    label: 'Products',
    children: [
      { label: 'Platform Overview', href: '/products' },
      { label: 'Core Solutions', href: '/products/core' },
      { label: 'Enterprise', href: '/products/enterprise' },
    ],
  },
  {
    label: 'Solutions',
    children: [
      { label: 'By Industry', href: '/solutions/industry' },
      { label: 'By Use Case', href: '/solutions/use-case' },
      { label: 'By Role', href: '/solutions/role' },
    ],
  },
  {
    label: 'Resources',
    children: [
      { label: 'Blog', href: '/resources/blog' },
      { label: 'Case Studies', href: '/resources/case-studies' },
      { label: 'Documentation', href: '/resources/docs' },
      { label: 'Research Reports', href: '/resources/reports' },
    ],
  },
  {
    label: 'Company',
    children: [
      { label: 'About Us', href: '/company/about' },
      { label: 'Careers', href: '/company/careers' },
      { label: 'Press', href: '/company/press' },
    ],
  },
  {
    label: 'Partners',
    href: '/partners',
  },
];

export default function Header() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [openDropdown, setOpenDropdown] = useState<string | null>(null);

  return (
    <header className="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
      <nav className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16">
          {/* Logo */}
          <div className="flex-shrink-0">
            <Link href="/" className="text-2xl font-bold text-gray-900">
              Artixcore
            </Link>
          </div>

          {/* Desktop Navigation */}
          <div className="hidden lg:flex lg:items-center lg:space-x-8">
            {navigation.map((item) => (
              <div
                key={item.label}
                className="relative"
                onMouseEnter={() => item.children && setOpenDropdown(item.label)}
                onMouseLeave={() => setOpenDropdown(null)}
              >
                {item.children ? (
                  <>
                    <button className="text-gray-700 hover:text-gray-900 font-medium py-2 px-3 rounded-md transition-colors">
                      {item.label}
                    </button>
                    {openDropdown === item.label && (
                      <div className="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 py-2">
                        {item.children.map((child) => (
                          <Link
                            key={child.label}
                            href={child.href || '#'}
                            className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors"
                          >
                            {child.label}
                          </Link>
                        ))}
                      </div>
                    )}
                  </>
                ) : (
                  <Link
                    href={item.href || '#'}
                    className="text-gray-700 hover:text-gray-900 font-medium py-2 px-3 rounded-md transition-colors"
                  >
                    {item.label}
                  </Link>
                )}
              </div>
            ))}
          </div>

          {/* CTA Buttons */}
          <div className="hidden lg:flex lg:items-center lg:space-x-4">
            <Link href="/login" className="text-gray-700 hover:text-gray-900 font-medium">
              Login
            </Link>
            <Button href="/demo" variant="primary" size="md">
              Request Demo
            </Button>
          </div>

          {/* Mobile menu button */}
          <button
            className="lg:hidden p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100"
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
          >
            <svg
              className="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              {mobileMenuOpen ? (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
              ) : (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
              )}
            </svg>
          </button>
        </div>

        {/* Mobile Navigation */}
        {mobileMenuOpen && (
          <div className="lg:hidden py-4 border-t border-gray-200">
            {navigation.map((item) => (
              <div key={item.label} className="mb-4">
                {item.children ? (
                  <>
                    <button
                      className="w-full text-left text-gray-700 font-medium py-2 px-3 rounded-md hover:bg-gray-50 flex items-center justify-between"
                      onClick={() =>
                        setOpenDropdown(openDropdown === item.label ? null : item.label)
                      }
                    >
                      {item.label}
                      <svg
                        className={`h-5 w-5 transition-transform ${
                          openDropdown === item.label ? 'rotate-180' : ''
                        }`}
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                      </svg>
                    </button>
                    {openDropdown === item.label && (
                      <div className="pl-4 mt-2 space-y-2">
                        {item.children.map((child) => (
                          <Link
                            key={child.label}
                            href={child.href || '#'}
                            className="block text-gray-600 py-2 px-3 rounded-md hover:bg-gray-50 hover:text-gray-900"
                            onClick={() => setMobileMenuOpen(false)}
                          >
                            {child.label}
                          </Link>
                        ))}
                      </div>
                    )}
                  </>
                ) : (
                  <Link
                    href={item.href || '#'}
                    className="block text-gray-700 font-medium py-2 px-3 rounded-md hover:bg-gray-50"
                    onClick={() => setMobileMenuOpen(false)}
                  >
                    {item.label}
                  </Link>
                )}
              </div>
            ))}
            <div className="mt-4 pt-4 border-t border-gray-200 space-y-2">
              <Link
                href="/login"
                className="block text-gray-700 font-medium py-2 px-3 rounded-md hover:bg-gray-50"
                onClick={() => setMobileMenuOpen(false)}
              >
                Login
              </Link>
              <Button href="/demo" variant="primary" size="md" className="w-full">
                Request Demo
              </Button>
            </div>
          </div>
        )}
      </nav>
    </header>
  );
}

