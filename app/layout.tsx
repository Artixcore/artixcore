import type { Metadata } from "next";
import { Geist, Geist_Mono } from "next/font/google";
import "./globals.css";
import Layout from "@/components/layout/Layout";

const geistSans = Geist({
  variable: "--font-geist-sans",
  subsets: ["latin"],
});

const geistMono = Geist_Mono({
  variable: "--font-geist-mono",
  subsets: ["latin"],
});

export const metadata: Metadata = {
  title: {
    default: "Artixcore - Intelligent Solutions Platform",
    template: "%s | Artixcore",
  },
  description: "Empowering organizations with intelligent solutions and cutting-edge technology",
  keywords: ["enterprise solutions", "intelligent platform", "business intelligence", "technology"],
  authors: [{ name: "Artixcore" }],
  openGraph: {
    type: "website",
    locale: "en_US",
    siteName: "Artixcore",
    title: "Artixcore - Intelligent Solutions Platform",
    description: "Empowering organizations with intelligent solutions and cutting-edge technology",
  },
  twitter: {
    card: "summary_large_image",
    title: "Artixcore - Intelligent Solutions Platform",
    description: "Empowering organizations with intelligent solutions and cutting-edge technology",
  },
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body
        className={`${geistSans.variable} ${geistMono.variable} antialiased`}
      >
        <Layout>{children}</Layout>
      </body>
    </html>
  );
}
