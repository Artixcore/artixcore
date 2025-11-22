import { ImageResponse } from 'next/og';

export const alt = 'Artixcore - Intelligent Solutions Platform';
export const size = {
  width: 1200,
  height: 630,
};

export const contentType = 'image/png';

export default async function Image() {
  return new ImageResponse(
    (
      <div
        style={{
          fontSize: 60,
          background: 'linear-gradient(135deg, #1da1f2 0%, #0d8bd9 100%)',
          width: '100%',
          height: '100%',
          display: 'flex',
          flexDirection: 'column',
          alignItems: 'center',
          justifyContent: 'center',
          color: 'white',
        }}
      >
        <div style={{ fontSize: 80, fontWeight: 'bold', marginBottom: 20 }}>
          Artixcore
        </div>
        <div style={{ fontSize: 40, opacity: 0.9 }}>
          Intelligent Solutions Platform
        </div>
      </div>
    ),
    {
      ...size,
    }
  );
}

