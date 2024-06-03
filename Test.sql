CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL
);
CREATE TABLE student (
    msv VARCHAR(50) NOT NULL UNIQUE,
    hoten VARCHAR(100) NOT NULL,
    gioitinh VARCHAR(5) NOT NULL,
    khoa VARCHAR(100) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('admin', 'admin');

INSERT INTO student (msv, hoten, gioitinh, khoa) VALUES
('111111', 'Lý Lê Bằng', 'Nam', 'Khoa Toán'),
('111112', 'Trần Anh Tuấn', 'Nữ', 'Khoa Toán'),
('111113', 'Lê Lan Anh', 'Nữ', 'Khoa Hóa'),
('111114', 'Đặng Thúy Nga', 'Nữ', 'Khoa Lý'),
('111115', 'Nguyễn Văn A', 'Nam', 'Khoa Công nghệ thông tin'),
('111116', 'Trần Văn Long', 'Nam', 'Khoa Công nghệ thông tin'),
('111117', 'Lê Văn Nam', 'Nam', 'Khoa Công nghệ thông tin');
