    import React, { useState, useEffect } from 'react';
    import { Swiper, SwiperSlide } from 'swiper/react';
    import 'swiper/css';
    import 'swiper/css/effect-coverflow';
    import 'swiper/css/pagination';
    import { EffectCoverflow, Pagination } from 'swiper/modules';

    const ProjectsSlider = () => {
        const [loading, setLoading] = useState(true);
        const projects = [
            'stockify1.png',
            'stockify2.png',
            'why.avif',
            'stockifydeks1.png',
            'stockifydeks2.png',
            'stockiy3.png',
        ];

        useEffect(() => {
            const imagePromises = projects.map((project) => {
                return new Promise((resolve) => {
                    const img = new Image();
                    img.src = `/images/projects/${project}`;
                    img.onload = () => resolve();
                });
            });

            Promise.all(imagePromises).then(() => {
                setLoading(false);
            });
        }, [projects]);

        const loaderStyle = `
            .loader {
                border: 16px solid #f3f3f3; /* Light grey */
                border-top: 16px solid #3498db; /* Blue */
                border-radius: 50%;
                width: 40px;
                height: 40px;
                animation: spin 2s linear infinite;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -40px;
                margin-left: -40px;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        `;

        return (
            <>
                <style>{loaderStyle}</style>
                {loading && <div className="loader "></div>}
                <Swiper
                    effect={'coverflow'}
                    grabCursor={true}
                    centeredSlides={true}
                    slidesPerView={'auto'}
                    coverflowEffect={{
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                    }}
                    pagination={true}
                    modules={[EffectCoverflow, Pagination]}
                    className="mySwiper"
                    style={{   paddingLeft: "120px",
                        visibility: loading ? 'hidden' : 'visible' }}
                >
                    {projects.map((project, index) => (
                        <SwiperSlide key={index}>
                            <img src={`/images/projects/${project}`} alt={`Project ${index + 1}`}
                            style={{ width: "250px", height: "auto", objectFit: "contain" }} />
                        </SwiperSlide>
                    ))}
                </Swiper>
            </>
        );
    };

    export default ProjectsSlider;
