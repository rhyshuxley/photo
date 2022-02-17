import React from 'react';
import ReactDOM from 'react-dom';
import '../../../public/css/photos.css';

function Photo() {
    let data = [
        {
            id: 1,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 2,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 3,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 4,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 5,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 6,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 7,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 8,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 9,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 10,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 11,
            imgSrc: 'https://source.unsplash.com/random',
        },
        {
            id: 12,
            imgSrc: 'https://source.unsplash.com/random',
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