import React from 'react';
import ReactDOM from 'react-dom';
import Gallery from './Gallery';

const Home = ({photos, direction}) => {
  const data = [
    {
      src: '/images/main/001.jpg',
      width: 740,
      height: 1110
    },
    {
      src: '/images/main/002.jpg',
      width: 512,
      height: 276
    },
    {
      src: '/images/main/003.jpg',
      width: 740,
      height: 493
    },
    {
      src: '/images/main/004.jpg',
      width: 740,
      height: 493
    },
    {
      src: '/images/main/005.jpg',
      width: 740,
      height: 740
    },
    {
      src: '/images/main/006.jpg',
      width: 740,
      height: 493
    },
    {
      src: '/images/main/007.jpg',
      width: 740,
      height: 1110
    },
    {
      src: '/images/main/008.jpg',
      width: 512,
      height: 341
    },
    {
      src: '/images/main/009.jpg',
      width: 512,
      height: 512
    },
    {
      src: '/images/main/011.jpg',
      width: 740,
      height: 1110
    },
    {
      src: '/images/main/012.jpg',
      width: 740,
      height: 555
    },
    {
      src: '/images/main/013.jpg',
      width: 740,
      height: 493
    },
    {
      src: '/images/main/015.jpg',
      width: 512,
      height: 341
    }
  ];
  
    return (
      <div>
          <Gallery photos={data} direction="row" margin="3" targetRowHeight="400"/>
      </div>
    );
}

export default Home;

if (document.getElementById('gallery')) {
    ReactDOM.render(<Home />, document.getElementById('gallery'));
}