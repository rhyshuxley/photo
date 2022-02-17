import React from 'react';
import ReactDOM from 'react-dom';
import Gallery from 'react-photo-gallery';

const Home = ({photos, direction}) => {
  const data = [
    {
      src: '/images/main/001.jpg',
      width: 2,
      height: 3
    },
    {
      src: '/images/main/002.jpg',
      width: 5,
      height: 3
    },
    {
      src: '/images/main/003.jpg',
      width: 4.5,
      height: 3
    },
    {
      src: '/images/main/004.jpg',
      width: 4.5,
      height: 3
    },
    {
      src: '/images/main/005.jpg',
      width: 1,
      height: 1
    },
    {
      src: '/images/main/006.jpg',
      width: 4.5,
      height: 3
    },
    {
      src: '/images/main/007.jpg',
      width: 2,
      height: 3
    },
    {
      src: '/images/main/008.jpg',
      width: 4.5,
      height: 3
    },
    {
      src: '/images/main/009.jpg',
      width: 1,
      height: 1
    },
    {
      src: '/images/main/011.jpg',
      width: 2,
      height: 3
    },
    {
      src: '/images/main/012.jpg',
      width: 4.5,
      height: 3
    },
    {
      src: '/images/main/013.jpg',
      width: 4.5,
      height: 3
    },
    {
      src: '/images/main/015.jpg',
      width: 4.5,
      height: 3
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