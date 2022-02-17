import React from 'react';
import ReactDOM from 'react-dom';
import '../../../public/css/photos.css';

function Photo() {
    let data = [
        {
            id: 1,
            imgSrc: '/images/main/001.jpg',
        },
        {
            id: 2,
            imgSrc: '/images/main/002.jpg',
        },
        {
            id: 3,
            imgSrc: '/images/main/003.jpg',
        },
        {
            id: 4,
            imgSrc: '/images/main/004.jpg',
        },
        {
            id: 5,
            imgSrc: '/images/main/005.jpg',
        },
        {
            id: 6,
            imgSrc: '/images/main/006.jpg',
        },
        {
            id: 7,
            imgSrc: '/images/main/007.jpg',
        },
        {
            id: 8,
            imgSrc: '/images/main/008.jpg',
        },
        {
            id: 9,
            imgSrc: '/images/main/009.jpg',
        },
        {
            id: 10,
            imgSrc: '/images/main/010.jpg',
        },
        {
            id: 11,
            imgSrc: '/images/main/011.jpg',
        },
        {
            id: 12,
            imgSrc: '/images/main/012.jpg',
        }
    ]

    return (
        <div className='gallery'>
            {data.map((item, index) => {
                return (
                    <div className="photo" key={index}>
                        <img src={item.imgSrc}></img>
                    </div>
                )
            })}
        </div>
    );
}

export default Photo;

if (document.getElementById('gallery')) {
    ReactDOM.render(<Photo />, document.getElementById('gallery'));
}