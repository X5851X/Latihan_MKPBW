function calculateGrade(score) {
    if (score >= 90 && score <= 100) {
      return "A";
    } else if (score >= 80 && score <= 89) {
      return "B";
    } else if (score >= 70 && score <= 79) {
      return "C";
    } else {
      return "D";
    }
  }
  
  const nilai = 90;
  const grade = calculateGrade(nilai);

  console.log(`Nilai ${nilai} mendapat grade ${grade}`);
  