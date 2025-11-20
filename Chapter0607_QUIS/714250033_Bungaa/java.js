import React from "react";

const AquariumCard = () => {
  return (
    <div style={styles.container}>
      <div style={styles.imageWrapper}>
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/e/e3/Aquarium_Indonesia_Pangandaran_-_Feb_2020_-_01.jpg" 
          alt="Aquarium Pangandaran"
          style={styles.image}
        />
      </div>
      <div style={styles.textContent}>
        <h2 style={styles.title}>Aquarium</h2>
        <h4 style={styles.subtitle}>PANGANDARAN</h4>
        <p style={styles.description}>
          Saksikan keajaiban bawah laut Indonesia dalam satu atap di Aquarium
          Indonesia Pangandaran! Kagumi koleksi biota laut yang beragam dan
          eksotis, mulai dari ikan-ikan berwarna-warni, penyu yang anggun,
          hingga hiu yang menakjubkan. Semuanya tersaji dalam tata ruang
          akuarium modern dan informatif.
        </p>
        <div style={styles.bottomLine}></div>
        <div style={styles.circle}></div>
      </div>
    </div>
  );
};

const styles = {
  container: {
    width: 320,
    borderRadius: 20,
    overflow: "hidden",
    boxShadow: "0 4px 10px rgba(0,0,0,0.2)",
    fontFamily: "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif",
    backgroundColor: "white",
    margin: "20px auto",
  },
  imageWrapper: {
    width: "100%",
    overflow: "hidden",
    borderTopLeftRadius: 20,
    borderTopRightRadius: 20,
  },
  image: {
    width: "100%",
    height: 220,
    objectFit: "cover",
    display: "block",
  },
  textContent: {
    backgroundColor: "#004b8d",
    color: "white",
    padding: "20px 20px 40px 20px",
    position: "relative",
  },
  title: {
    fontFamily: "'Brush Script MT', cursive",
    fontSize: 26,
    margin: "0 0 5px 0",
  },
  subtitle: {
    fontSize: 14,
    margin: 0,
    letterSpacing: 3,
    fontWeight: 600,
  },
  description: {
    fontSize: 14,
    marginTop: 10,
    lineHeight: 1.4,
    opacity: 0.85,
  },
  bottomLine: {
    height: 2,
    width: 60,
    backgroundColor: "white",
    marginTop: 20,
    borderRadius: 2,
  },
  circle: {
    width: 18,
    height: 18,
    backgroundColor: "white",
    borderRadius: "50%",
    position: "absolute",
    bottom: 15,
    right: 15,
  },
};

export default AquariumCard;
