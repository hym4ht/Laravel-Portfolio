import React from 'react';

const SkillsSlider = ({ images, direction = 'normal' }) => {
    const trackClassName = direction === 'reverse' ? 'skills-slide-track-reverse' : 'skills-slide-track';

    return (
        <div className="skills-slider">
            <div className={trackClassName}>
                {images.map((image, index) => (
                    <div className="skills-slide" key={index}>
                        <img src={image} alt={`Skill ${index}`} />
                    </div>
                ))}
                {images.map((image, index) => (
                    <div className="skills-slide" key={index + images.length}>
                        <img src={image} alt={`Skill ${index}`} />
                    </div>
                ))}
            </div>
        </div>
    );
};

export default SkillsSlider;